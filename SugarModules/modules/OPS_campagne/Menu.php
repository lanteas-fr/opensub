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
 
if(ACLController::checkAccess('OPS_campagne', 'edit', true)){
    $module_menu[]=array('index.php?module=OPS_campagne&action=EditView&return_module=OPS_campagne&return_action=DetailView', $mod_strings['LNK_NEW_RECORD'], 'Add', 'OPS_campagne');
}
if(ACLController::checkAccess('OPS_campagne', 'list', true)){
    $module_menu[]=array('index.php?module=OPS_campagne&action=index&return_module=OPS_campagne&return_action=DetailView', $mod_strings['LNK_LIST'],'View', 'OPS_campagne');
}
if(ACLController::checkAccess('OPS_campagne', 'import', true)){
    $module_menu[]=array('index.php?module=Import&action=Step1&import_module=OPS_campagne&return_module=OPS_campagne&return_action=index', $app_strings['LBL_IMPORT'], 'Import', 'OPS_campagne');
}