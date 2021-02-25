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
 
if(ACLController::checkAccess('OPS_tranche', 'edit', true)){
    $module_menu[]=array('index.php?module=OPS_tranche&action=EditView&return_module=OPS_tranche&return_action=DetailView', $mod_strings['LNK_NEW_RECORD'], 'Add', 'OPS_tranche');
}
if(ACLController::checkAccess('OPS_tranche', 'list', true)){
    $module_menu[]=array('index.php?module=OPS_tranche&action=index&return_module=OPS_tranche&return_action=DetailView', $mod_strings['LNK_LIST'],'View', 'OPS_tranche');
}
