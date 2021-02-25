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
 
if(ACLController::checkAccess('OPS_reunion', 'edit', true)){
    $module_menu[]=array('index.php?module=OPS_reunion&action=EditView&return_module=OPS_reunion&return_action=DetailView', $mod_strings['LNK_NEW_RECORD'], 'Add', 'OPS_reunion');
}
if(ACLController::checkAccess('OPS_reunion', 'list', true)){
    $module_menu[]=array('index.php?module=OPS_reunion&action=index&return_module=OPS_reunion&return_action=DetailView', $mod_strings['LNK_LIST'],'View', 'OPS_reunion');
}
