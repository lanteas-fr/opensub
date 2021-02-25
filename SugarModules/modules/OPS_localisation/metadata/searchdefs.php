<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$module_name              = 'OPS_localisation';
$searchdefs[$module_name] = array(
    'layout' => array(
        'basic_search' => array(
            'canton' => array(
                'type' => 'varchar',
                'label' => 'LBL_CANTON',
                'width' => '10%',
                'default' => true,
                'name' => 'canton'
            ),
            'code_canton' => array(
                'type' => 'varchar',
                'label' => 'LBL_CODE_CANTON',
                'width' => '10%',
                'default' => true,
                'name' => 'code_canton'
            ),
            'name' => array(
                'name' => 'name',
                'default' => true,
                'width' => '10%'
            ),
            'code_commune' => array(
                'type' => 'varchar',
                'label' => 'LBL_CODE_COMMUNE',
                'width' => '10%',
                'default' => true,
                'name' => 'code_communes'
            )
        ),
        'advanced_search' => array(
            'name' => array(
                'name' => 'name',
                'default' => true,
                'width' => '10%'
            ),
            'code_commune' => array(
                'type' => 'varchar',
                'label' => 'LBL_CODE_COMMUNE',
                'width' => '10%',
                'default' => true,
                'name' => 'code_communes'
            ),
            'canton' => array(
                'type' => 'varchar',
                'label' => 'LBL_CANTON',
                'width' => '10%',
                'default' => true,
                'name' => 'canton'
            ),
            'code_canton' => array(
                'type' => 'varchar',
                'label' => 'LBL_CODE_CANTON',
                'width' => '10%',
                'default' => true,
                'name' => 'code_canton'
            ),
            'code_departement' => array(
                'type' => 'varchar',
                'label' => 'LBL_CODE_DEPARTEMENT',
                'width' => '10%',
                'default' => true,
                'name' => 'code_departement'
            ),
            'code_region' => array(
                'type' => 'varchar',
                'label' => 'LBL_CODE_REGION',
                'width' => '10%',
                'default' => true,
                'name' => 'code_region'
            )
        )
    ),
    'templateMeta' => array(
        'maxColumns' => '3',
        'maxColumnsBasic' => '4',
        'widths' => array(
            'label' => '10',
            'field' => '30'
        )
    )
);
;
?>