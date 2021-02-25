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
 
if(ACLController::checkAccess('OPS_personne_morale', 'edit', true)){
    $module_menu[]=array('index.php?module=OPS_personne_morale&action=EditView&return_module=OPS_personne_morale&return_action=DetailView', $mod_strings['LNK_NEW_RECORD'], 'Add', 'OPS_personne_morale');
}
if(ACLController::checkAccess('OPS_personne_morale', 'list', true)){
    $module_menu[]=array('index.php?module=OPS_personne_morale&action=index&return_module=OPS_personne_morale&return_action=DetailView', $mod_strings['LNK_LIST'],'View', 'OPS_personne_morale');
}
if(ACLController::checkAccess('OPS_personne_morale', 'import', true))$module_menu[]=Array("index.php?module=Import&action=Step1&import_module=OPS_personne_morale&return_module=OPS_personne_morale&return_action=index", $mod_strings['LNK_IMPORT_OPS_PERSONNE_MORALE'],"Import", 'OPS_personne_morale');
