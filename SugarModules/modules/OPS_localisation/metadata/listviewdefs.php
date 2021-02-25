<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$module_name                = 'OPS_localisation';
$listViewDefs[$module_name] = array(
    'NAME' => array(
        'width' => '32%',
        'label' => 'LBL_NAME',
        'default' => true,
        'link' => true
    ),
    'CODE_COMMUNE' => array(
        'type' => 'varchar',
        'label' => 'LBL_CODE_COMMUNE',
        'width' => '10%',
        'default' => true
    ),
    'CANTON' => array(
        'type' => 'varchar',
        'label' => 'LBL_CANTON',
        'width' => '10%',
        'default' => true
    ),
    'CODE_CANTON' => array(
        'type' => 'varchar',
        'label' => 'LBL_CODE_CANTON',
        'width' => '10%',
        'default' => true
    ),
    'CODE_DEPARTEMENT' => array(
        'type' => 'varchar',
        'label' => 'LBL_CODE_DEPARTEMENT',
        'width' => '10%',
        'default' => true
    ),
    'CODE_REGION' => array(
        'type' => 'varchar',
        'label' => 'LBL_CODE_REGION',
        'width' => '10%',
        'default' => false
    ),
    'DESCRIPTION' => array(
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => false
    )
);
;
?>