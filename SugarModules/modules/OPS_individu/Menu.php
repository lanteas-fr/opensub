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
 
if(ACLController::checkAccess('OPS_individu', 'edit', true)){
    $module_menu[]=array('index.php?module=OPS_individu&action=EditView&return_module=OPS_individu&return_action=DetailView', $mod_strings['LNK_NEW_RECORD'], 'Add', 'OPS_individu');
}
if(ACLController::checkAccess('OPS_individu', 'edit', true)){
    $module_menu[]=array('index.php?module=OPS_individu&action=ImportVCard', $mod_strings['LNK_IMPORT_VCARD'], 'Create_Contact_Vcard', 'OPS_individu');
}if(ACLController::checkAccess('OPS_individu', 'list', true)){
    $module_menu[]=array('index.php?module=OPS_individu&action=index&return_module=OPS_individu&return_action=DetailView', $mod_strings['LNK_LIST'],'View', 'OPS_individu');
}
if(ACLController::checkAccess('OPS_individu', 'import', true))$module_menu[]=Array("index.php?module=Import&action=Step1&import_module=OPS_individu&return_module=OPS_individu&return_action=index", $mod_strings['LNK_IMPORT_OPS_INDIVIDU'],"Import", 'OPS_individu');
