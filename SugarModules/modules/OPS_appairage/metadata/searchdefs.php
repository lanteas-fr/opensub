<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$module_name = 'OPS_appairage';
$searchdefs[$module_name] = array(
    'templateMeta' => array(
        'maxColumns' => '3',
        'maxColumnsBasic' => '4',
        'widths' => array('label' => '10', 'field' => '30'),
    ),
    'layout' => array(
        'basic_search' => array(
            'name',
            array('name' => 'current_user_only', 'label' => 'LBL_CURRENT_USER_FILTER', 'type' => 'bool'),
        ),
        'advanced_search' => array(
            'name',
            array(
                'name' => 'assigned_user_id',
                'label' => 'LBL_ASSIGNED_TO',
                'type' => 'enum',
                'function' => array('name' => 'get_user_array', 'params' => array(false))
            ),
            'statut',
            array (
                'name' => 'parent_type',
                'label' => 'LBL_PARENT_TYPE',
                'type' => 'enum',
              ),
        ),
    ),
);
