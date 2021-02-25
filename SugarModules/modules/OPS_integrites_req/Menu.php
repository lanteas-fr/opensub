<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

 if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

global $mod_strings, $app_strings, $sugar_config;
 
if(ACLController::checkAccess('OPS_integrites', '', true)){
	$module_menu[]=Array("index.php?module=OPS_integrites&action=console&return_module=OPS_integrites&return_action=ListView", $mod_strings['LNK_CONSOLE'],"OPS_integrites", 'OPS_integrites');
}

if(ACLController::checkAccess('OPS_integrites_req', '', true)){
    $module_menu[]=array('index.php?module=OPS_integrites_req&action=EditView&return_module=OPS_integrites_req&return_action=DetailView', $mod_strings['LNK_NEW_RECORD'], 'OPS_integrites_req', 'OPS_integrites_req');
}

if(ACLController::checkAccess('OPS_integrites_req', '', true)){
    $module_menu[]=array('index.php?module=OPS_integrites_req&action=index&return_module=OPS_integrites_req&return_action=DetailView', $mod_strings['LNK_LIST'],'OPS_integrites_req', 'OPS_integrites_req');
}

if(ACLController::checkAccess('OPS_integrites_req', '', true))$module_menu[]=Array("index.php?module=Import&action=Step1&import_module=OPS_integrites_req&return_module=OPS_integrites_req&return_action=index", $mod_strings['LNK_IMPORT_OPS_INTEGRITES_REQ'],"OPS_integrites_req", 'OPS_integrites_req');


