<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

if(!defined('sugarEntry')) define('sugarEntry', true);

chdir('../../../');

$webservice_path = 'custom/service/ODE/ODEService.php';
$webservice_class = 'ODEService';

$webservice_impl_class_path = 'custom/service/ODE/ODEServiceImpl.php';
$webservice_impl_class = 'ODEServiceImpl';
$registry_path = 'service/v4_1/registry.php';
$registry_class = 'registry';
$location = '/custom/service/rest.php';

require_once('service/core/webservice.php');

?>