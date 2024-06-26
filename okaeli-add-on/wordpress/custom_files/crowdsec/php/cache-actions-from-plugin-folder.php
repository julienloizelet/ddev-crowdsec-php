<?php
/**
 * #ddev-generated
 * ddev manages this file and may delete or overwrite it unless the above line is removed.
 * This file comes from "ddev get julienloizelet/ddev-crowdsec-php"
 *
 */
/**
 * This script is aimed to be called directly in a browser (development only, do not use in production)
 * It will act on the LAPI cache depending on the auto-prepend settings file and on the passed parameter.
 * This script should be copied in the root folder of your WordPress sources
 *
 */
require_once __DIR__ . '/wp-content/plugins/crowdsec/vendor/autoload.php';
require_once __DIR__ . '/wp-content/plugins/crowdsec/inc/Bouncer.php';

use CrowdSecWordPressBouncer\Bouncer;
use CrowdSecWordPressBouncer\Constants;

/**
 * @var $crowdSecStandaloneBouncerConfig
 */
if (isset($_GET['action']) && in_array($_GET['action'], ['refresh', 'clear', 'prune','captcha-phrase'])) {
    $action = $_GET['action'];
    $jsonConfigs = require_once __DIR__.'/wp-content/plugins/crowdsec/inc/standalone-settings.php';
    $crowdSecConfigs = json_decode($jsonConfigs, true);
    $bouncer = new Bouncer($crowdSecConfigs);
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
    exit('You must pass an "action" param (refresh, clear or prune)' . \PHP_EOL);
}
