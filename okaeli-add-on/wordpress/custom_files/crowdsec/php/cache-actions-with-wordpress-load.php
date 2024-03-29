<?php
/**
 * #ddev-generated
 * ddev manages this file and may delete or overwrite it unless the above line is removed.
 * This file comes from "ddev get julienloizelet/ddev-crowdsec-php"
 *
 */
/**
 * This script is aimed to be called directly in a browser (development only, do not use in production)
 * It will act on the LAPI cache depending on the passed parameter.
 * This script should be copied in the root folder of your WordPress sources
 *
 */
// As we load WordPress with wp-load.php, bouncer is bouncing.
// And we don't want to bounce here, so we define a constant to prevent it.
defined( 'ALREADY_BOUNCED_WITH_STANDALONE' ) || define( 'ALREADY_BOUNCED_WITH_STANDALONE', true );
require_once __DIR__ . '/wp-load.php';
require_once __DIR__ . '/wp-content/plugins/crowdsec/vendor/autoload.php';
require_once __DIR__ . '/wp-content/plugins/crowdsec/inc/Bouncer.php';
require_once __DIR__ . '/wp-content/plugins/crowdsec/inc/options-config.php';

use CrowdSecWordPressBouncer\Bouncer;
use CrowdSecWordPressBouncer\Constants;


if (isset($_GET['action']) && in_array($_GET['action'], ['refresh', 'clear', 'prune','captcha-phrase'])) {
    $action = $_GET['action'];
    $crowdSecWpPluginOptions = getCrowdSecOptionsConfig();
    $data = [];
    foreach ($crowdSecWpPluginOptions as $option) {
        $data[$option['name']] = is_multisite() ? get_site_option($option['name']) : get_option($option['name']);
    }
    $configs = $data;
    if(!empty($data['crowdsec_auto_prepend_file_mode'])){
        $jsonConfigs = require_once __DIR__.'/wp-content/plugins/crowdsec/inc/standalone-settings.php';
        $configs = json_decode($jsonConfigs, true);
    }

    $bouncer = new Bouncer($configs);
    $result = "<h1>Cache action has been done: $action</h1>";

    switch ($action) {
        case 'refresh':
            $bouncer->refreshBlocklistCache();
            break;
        case 'clear':
            $bouncer->clearCache();
            break;
        case 'prune':
            $bouncer->pruneCache();
            break;
        case 'captcha-phrase':
            if(!isset($_GET['ip'])){
                exit('You must pass an "ip" param to get the associated captcha phrase' . \PHP_EOL);
            }
            $ip = $_GET['ip'];
            $cache = $bouncer->getRemediationEngine()->getCacheStorage();
            $cacheKey = $cache->getCacheKey(Constants::CACHE_TAG_CAPTCHA, $ip);
            $item = $cache->getItem($cacheKey);
            $result = "<h1>No captcha for this IP: $ip</h1>";
            if($item->isHit()){
                $cached = $item->get();
                $phrase = $cached['phrase_to_guess']??"No phrase to guess for this captcha (already resolved ?)";
                $result = "<h1>$phrase</h1>";
            }
            break;
        default:
            throw new Exception("Unknown cache action type:$action");
    }

    echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'/>
    <title>Cache action: $action</title>
</head>

<body>
    $result
</body>
</html>
";
} else {
    exit('You must pass an "action" param (refresh, clear, prune or captcha-phrase)' . \PHP_EOL);
}
