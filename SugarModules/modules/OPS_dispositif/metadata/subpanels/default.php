<?php
/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$module_name = 'OPS_dispositif';
$subpanel_layout = array(
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateButton'),
        array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => $module_name),
    ),

    'where' => '',

    'list_fields' => array(
        'name' => array(
            'vname' => 'LBL_NAME',
            'widget_class' => 'SubPanelDetailViewLink',
            'width' => '18%',
        ),
        'debut_realisation' => array(
            'vname' => 'LBL_DEBUT_REALISATION',
            'width' => '18%',
        ),
        'fin_realisation' => array(
            'vname' => 'LBL_FIN_REALISATION',
            'width' => '18%',
        ),
        'debut_caducite' => array(
            'vname' => 'LBL_DEBUT_CADUCITE',
            'width' => '18%',
        ),
        'fin_caducite' => array(
            'vname' => 'LBL_FIN_CADUCITE',
            'width' => '18%',
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
