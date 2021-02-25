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
 
if(ACLController::checkAccess('OPS_piece', 'edit', true)){
    $module_menu[]=array('index.php?module=OPS_piece&action=EditView&return_module=OPS_piece&return_action=DetailView', $mod_strings['LNK_NEW_RECORD'], 'Add', 'OPS_piece');
}
if(ACLController::checkAccess('OPS_piece', 'list', true)){
    $module_menu[]=array('index.php?module=OPS_piece&action=index&return_module=OPS_piece&return_action=DetailView', $mod_strings['LNK_LIST'],'View', 'OPS_piece');
}
