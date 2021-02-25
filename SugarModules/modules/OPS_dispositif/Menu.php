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
 
if(ACLController::checkAccess('OPS_dispositif', 'edit', true)){
    $module_menu[]=array('index.php?module=OPS_dispositif&action=EditView&return_module=OPS_dispositif&return_action=DetailView', $mod_strings['LNK_NEW_RECORD'], 'Add', 'OPS_dispositif');
}
if(ACLController::checkAccess('OPS_dispositif', 'list', true)){
    $module_menu[]=array('index.php?module=OPS_dispositif&action=index&return_module=OPS_dispositif&return_action=DetailView', $mod_strings['LNK_LIST'],'View', 'OPS_dispositif');
}