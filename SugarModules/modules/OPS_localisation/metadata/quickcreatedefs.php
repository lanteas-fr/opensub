<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$module_name            = 'OPS_localisation';
$viewdefs[$module_name] = array(
    'QuickCreate' => array(
        'templateMeta' => array(
            'maxColumns' => '2',
            'widths' => array(
                0 => array(
                    'label' => '10',
                    'field' => '30'
                ),
                1 => array(
                    'label' => '10',
                    'field' => '30'
                )
            ),
            'useTabs' => false,
            'tabDefs' => array(
                'DEFAULT' => array(
                    'newTab' => false,
                    'panelDefault' => 'expanded'
                )
            )
        ),
        'panels' => array(
            'default' => array(
                0 => array(
                    0 => 'name',
                    1 => array(
                        'name' => 'code_communes',
                        'label' => 'LBL_CODE_COMMUNE'
                    )
                ),
                1 => array(
                    0 => array(
                        'name' => 'canton',
                        'label' => 'LBL_CANTON'
                    ),
                    1 => array(
                        'name' => 'code_canton',
                        'label' => 'LBL_CODE_CANTON'
                    )
                ),
                2 => array(
                    0 => array(
                        'name' => 'code_departement',
                        'label' => 'LBL_CODE_DEPARTEMENT'
                    ),
                    1 => array(
                        'name' => 'code_region',
                        'label' => 'LBL_CODE_REGION'
                    )
                )
            )
        )
    )
);
;
?>