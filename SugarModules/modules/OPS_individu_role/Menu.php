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
 
if(ACLController::checkAccess('OPS_individu_role', 'edit', true)){
    $module_menu[]=array('index.php?module=OPS_individu_role&action=EditView&return_module=OPS_individu_role&return_action=DetailView', $mod_strings['LNK_NEW_RECORD'], 'Add', 'OPS_individu_role');
}
if(ACLController::checkAccess('OPS_individu_role', 'list', true)){
    $module_menu[]=array('index.php?module=OPS_individu_role&action=index&return_module=OPS_individu_role&return_action=DetailView', $mod_strings['LNK_LIST'],'View', 'OPS_individu_role');
}
