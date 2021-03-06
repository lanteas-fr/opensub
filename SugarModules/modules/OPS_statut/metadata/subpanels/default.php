<?php
/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$module_name = 'OPS_statut';
$subpanel_layout = array(
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateButton'),
        array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => $module_name),
    ),

    'where' => '',

    'list_fields' => array(
        'ordre'=>array(
                'vname' => 'LBL_ORDRE',
                'width' => '4%',
            ),
        'name' => array(
            'vname' => 'LBL_NAME',
            'widget_class' => 'SubPanelDetailViewLink',
            'width' => '25%',
        ),
        'code_couleur' => 
          array (
            'vname' => 'LBL_CODE_COULEUR',
            'width' => '25%',
          ),
        'avancement' => 
          array (
            'vname' => 'LBL_AVANCEMENT',
            'width' => '25%',
          ),
          'nom_statut_gru' => 
          array (
            'vname' => 'LBL_NOM_STATUT_GRU',
            'width' => '25%',
          ),
        'date_modified' => array(
            'vname' => 'LBL_DATE_MODIFIED',
            'width' => '45%',
        ),
        'edit_button' => array(
            'vname' => 'LBL_EDIT_BUTTON',
            'widget_class' => 'SubPanelEditButton',
            'module' => $module_name,
            'width' => '4%',
        ),
        'remove_button' => array(
            'vname' => 'LBL_REMOVE',
            'widget_class' => 'SubPanelRemoveButton',
            'module' => $module_name,
            'width' => '5%',
        ),
    ),
);
