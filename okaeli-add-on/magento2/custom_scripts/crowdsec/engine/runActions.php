<?php
/**
 * #ddev-generated
 * ddev manages this file and may delete or overwrite it unless the above line is removed.
 * This file comes from "ddev get julienloizelet/ddev-crowdsec-php"
 *
 */
/**
 * Run a specific action from browser (development only, do not use in production)
 * This script should be copied in the pub folder of your Magento 2 sources
 *
 */

use CrowdSec\Engine\Api\Data\EventInterface;
use CrowdSec\Engine\Api\EventRepositoryInterface;
use CrowdSec\Engine\Helper\Data as Helper;
use CrowdSec\Engine\CapiEngine\Remediation;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\App\AreaList;
use Magento\Framework\App\ExceptionHandlerInterface;
use Magento\Framework\App\Request\Http as RequestHttp;
use Magento\Framework\App\Response\Http as ResponseHttp;
use Magento\Framework\App\State;
use Magento\Framework\Event\Manager;
use Magento\Framework\ObjectManager\ConfigLoaderInterface;
use Magento\Framework\ObjectManagerInterface;
use Magento\Framework\Registry;
use CrowdSec\Engine\CapiEngine\Storage;

require '../app/bootstrap.php';

class RunActionRunner extends \Magento\Framework\App\Http
    implements \Magento\Framework\AppInterface
{
    /**
     * @var Helper
     */
    private $helper;
    /**
     * @var Remediation
     */
    private $remediation;
    /**
     * @var SearchCriteriaBuilder
     */
    private $searchCriteriaBuilder;
    /**
     * @var EventRepositoryInterface
     */
    private $eventRepository;

    private $storage;


    public function __construct(
        ObjectManagerInterface $objectManager,
        Manager $eventManager,
        AreaList $areaList,
        RequestHttp $request,
        ResponseHttp $response,
        ConfigLoaderInterface $configLoader,
        State $state,
        Registry $registry,
        Helper $helper,
        Remediation $remediation,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        EventRepositoryInterface $eventRepository,
        Storage $storage,
        ExceptionHandlerInterface $exceptionHandler = null
    ) {

        parent::__construct($objectManager, $eventManager, $areaList, $request, $response, $configLoader, $state,
            $registry, $exceptionHandler);

        $this->_state->setAreaCode('adminhtml');

        $this->helper = $helper;
        $this->remediation = $remediation;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->eventRepository = $eventRepository;
        $this->storage = $storage;

    }

    function launch()
    {

        if (isset($_GET['action'])) {
            $action = $_GET['action'];

            switch ($action) {
                case 'refresh':
                    $result = json_encode($this->remediation->refreshDecisions(), true);
                    break;
                case 'clear':
                    $result = json_encode($this->remediation->getCacheStorage()->clear(), true);
                    break;
                case 'prune':
                    $result = json_encode($this->remediation->getCacheStorage()->prune(), true);
                    break;
                case 'delete-events':
                    $ip = $_GET['ip'];
                    $searchCriteria = $this->searchCriteriaBuilder
                        ->addFilter(EventInterface::IP, $ip)
                        ->create();

                    $events = $this->eventRepository->getList($searchCriteria)->getItems();

                    $allIds = array_keys($events);

                    $result = $this->eventRepository->massDeleteByIds($allIds);
                    $result = json_encode($result, true);
                    break;
                case 'store-credentials':
                    $machineId = $_GET['id'];
                    $password = $_GET['password'];
                    $result1 = $this->storage->storeMachineId($machineId);
                    $result2 = $this->storage->storePassword($password);
                    $result = json_encode(['id' => $result1, 'password' => $result2], true);
                    break;
                default:
                    throw new Exception("Unknown action type:$action");
            }

            $body = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'/>
    <title>Action: $action</title>
</head>

<body>
    $result
</body>
</html>
";
            $this->_response->setBody($body);

            return $this->_response;
        } else {
            exit('You must pass an "action" param' . \PHP_EOL);
        }
    }
}

$bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $_SERVER);
$app = $bootstrap->createApplication('RunActionRunner');
$bootstrap->run($app);
