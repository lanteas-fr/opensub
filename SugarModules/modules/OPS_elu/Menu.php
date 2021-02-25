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
 
if(ACLController::checkAccess('OPS_elu', 'edit', true)){
    $module_menu[]=array('index.php?module=OPS_elu&action=EditView&return_module=OPS_elu&return_action=DetailView', $mod_strings['LNK_NEW_RECORD'], 'Add', 'OPS_elu');
}
if(ACLController::checkAccess('OPS_elu', 'list', true)){
    $module_menu[]=array('index.php?module=OPS_elu&action=index&return_module=OPS_elu&return_action=DetailView', $mod_strings['LNK_LIST'],'View', 'OPS_elu');
}
if(ACLController::checkAccess('OPS_elu', 'import', true)){
    $module_menu[]=array('index.php?module=Import&action=Step1&import_module=OPS_elu&return_module=OPS_elu&return_action=index', $app_strings['LBL_IMPORT'], 'Import', 'OPS_elu');
}