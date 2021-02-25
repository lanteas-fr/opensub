<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


$module_name = 'OPS_individu';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
      'includes' => array(
          0 => array(
              'file' => 'modules/OPS_individu/javascript/editVue.js'
          ),
          1 => array(
              'file' => 'custom/include/javascript/bootstrap-inputmask.js',
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
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
          1 => 'last_name',
        ),
        1 => 
        array (
          0 => array (
            'name' => 'phone_home',
            'label' => 'LBL_HOME_PHONE',
            'customCode' => '<input name="phone_home" id="phone_home" class="phone" type="text"  maxlength="14" size="25" value="{$fields.phone_home.value}" data-mask="99 99 99 99 99" />',
          ),
          1 => array (
            'name' => 'phone_mobile',
            'label' => 'LBL_MOBILE_PHONE',
            'customCode' => '<input name="phone_mobile" id="phone_mobile" class="phone" type="text"  maxlength="14" size="25" value="{$fields.phone_mobile.value}" data-mask="99 99 99 99 99" />',
          ),
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
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
      ),
    ),
  ),
);
;
?>
