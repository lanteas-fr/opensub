<?php
/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$module_name = 'OPS_localisation';
$subpanel_layout = array(
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateButton'),
        array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => $module_name),
    ),

    'where' => '',

    'list_fields' => array(
        'code_commune' => array(
            'vname' => 'LBL_CODE_COMMUNE',
            'width' => '10%',
        ),
        'name' => array(
            'vname' => 'LBL_NAME',
            'widget_class' => 'SubPanelDetailViewLink',
            'width' => '20%',
        ),
        'code_canton' => array(
            'vname' => 'LBL_CODE_CANTON',
            'width' => '10%',
        ),
        'canton' => array(
            'vname' => 'LBL_CANTON',
            'width' => '20%',
        ), 
        'code_departement' => array(
            'vname' => 'LBL_CODE_DEPARTEMENT',
            'width' => '10%',
        ),
        'code_region' => array(
            'vname' => 'LBL_CODE_REGION',
            'width' => '10%',
        ),        
        'remove_button' => array(
            'vname' => 'LBL_REMOVE',
            'widget_class' => 'SubPanelRemoveButton',
            'module' => $module_name,
            'width' => '5%',
        ),
    ),
);
