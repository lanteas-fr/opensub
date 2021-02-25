<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


$module_name = 'OPS_individu';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
          4 => array( 'customCode' => '{$CREER_DOSSIER}' ),
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'ADRESSES' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'Information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'comment' => 'First name of the contact',
            'label' => 'LBL_FIRST_NAME',
          ),
          1 => 
          array (
            'name' => 'last_name',
            'comment' => 'Last name of the contact',
            'label' => 'LBL_LAST_NAME',
          ),
        ),
        1 => 
        array (
          0 => 'phone_home',
          1 => 'phone_mobile',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_naissance',
            'label' => 'LBL_DATE_NAISSANCE',
          ),
          1 => 
          array (
            'name' => 'lieu_naissance',
            'label' => 'LBL_LIEU_NAISSANCE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'nationalite',
            'studio' => 'visible',
            'label' => 'LBL_NATIONALITE',
          ),
          1 => 
          array (
            'name' => 'situation_familiale',
            'studio' => 'visible',
            'label' => 'LBL_SITUATION_FAMILIALE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'tiers_financier',
            'label' => 'LBL_TIERS_FINANCIER',
          ),
          1 => 
          array (
            'name' => 'financeur',
            'label' => 'LBL_FINANCEUR',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'reference',
            'label' => 'LBL_REFERENCE',
          ),
          1 => 'assigned_user_name',
        ),
        6 => 
        array (
          0 => 'description',
        ),
        7 => 
        array (
          0 => 'date_entered',
          1 => 'date_modified',
        ),
      ),
      'Adresses' => 
      array (
        0 => 
        array (
          0 => 'email1',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'label' => 'LBL_PRIMARY_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
            ),
          ),
        ),
      ),
    ),
  ),
);
;
?>
