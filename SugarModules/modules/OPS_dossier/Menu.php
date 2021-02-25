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
 
if(ACLController::checkAccess('OPS_dossier', 'list', true)){
    $module_menu[]=array('index.php?module=OPS_dossier&action=index&return_module=OPS_dossier&return_action=DetailView', $mod_strings['LNK_LIST'],'View', 'OPS_dossier');
}

if(ACLController::checkAccess('OPS_dossier', 'import', true)){
    $module_menu[]= array(
        "index.php?module=Import&action=Step1&import_module=OPS_dossier&return_module=OPS_dossier&return_action=index",
        $mod_strings['LNK_IMPORT_OPS_DOSSIER'],
        "Import",
        'OPS_dossier'
    );
}
