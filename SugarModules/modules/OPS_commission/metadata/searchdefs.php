<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$module_name = 'OPS_commission';
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
            'libelle_court' => 
            array (
              'type' => 'text',
              'label' => 'LBL_LIBELLE_COURT',
              'currency_format' => true,
              'width' => '10%',
              'default' => true,
              'name' => 'libelle_court',
            ),
            'libelle_long' => 
            array (
              'type' => 'text',
              'label' => 'LBL_LIBELLE_LONG',
              'currency_format' => true,
              'width' => '10%',
              'default' => true,
              'name' => 'libelle_long',
            ),
            'statut_commission' => 
            array (
              'label' => 'LBL_STATUT_COMMISSION',
              'currency_format' => true,
              'width' => '10%',
              'default' => true,
              'name' => 'statut_commission',
            ),
        ),

    ),
);
