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
 
if(ACLController::checkAccess('OPS_guide_instruction', 'edit', true)){
    $module_menu[]=array('index.php?module=OPS_guide_instruction&action=EditView&return_module=OPS_guide_instruction&return_action=DetailView', $mod_strings['LNK_NEW_RECORD'], 'Add', 'OPS_guide_instruction');
}
if(ACLController::checkAccess('OPS_guide_instruction', 'list', true)){
    $module_menu[]=array('index.php?module=OPS_guide_instruction&action=index&return_module=OPS_guide_instruction&return_action=DetailView', $mod_strings['LNK_LIST'],'View', 'OPS_guide_instruction');
}
