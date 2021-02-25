<?php
/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$module_name = 'OPS_historisation';
$subpanel_layout = array(
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateButton'),
        array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => $module_name),
    ),

    'where' => '',

    'list_fields' => array(
        'date_entered' => array(
            'vname' => 'LBL_DATE_ENTERED',
            'width' => '20%',
        ),        
        'canal' => array(
            'vname' => 'LBL_CANAL',
            'width' => '20%',
        ),
        'etape' => array(
            'type' => 'relate',
            'studio' => 'visible',
            'vname' => 'LBL_ETAPE',
            'id' => 'OPS_ETAPE_ID',
            'link' => false,
            'width' => '10%',
            'default' => true,
        ),
        'statut' => array(
            'type' => 'relate',
            'studio' => 'visible',
            'vname' => 'LBL_STATUT',
            'id' => 'OPS_STATUT_ID',
            'link' => false,
            'width' => '10%',
            'default' => true,
        ),
        'auteur' => array(
            'vname' => 'LBL_AUTEUR',
            'width' => '20%',
        ),
    ),
);
