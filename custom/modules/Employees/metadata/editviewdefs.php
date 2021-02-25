<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$viewdefs ['Employees'] = 
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'employee_status',
        ),
        1 => 
        array (
          0 => 'first_name',
          1 => 
          array (
            'name' => 'last_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        2 => 
        array (
          0 => array (
            'name' => 'title',
            'customCode' => '{if $EDIT_REPORTS_TO}<input type="text" name="{$fields.title.name}" id="{$fields.title.name}" size="30" maxlength="50" value="{$fields.title.value}" title="" tabindex="t" >{else}{$fields.title.value}<input type="hidden" name="{$fields.title.name}" id="{$fields.title.name}" value="{$fields.title.value}">{/if}',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 =>array (
            'name' => 'phone_work',
            'label' => 'LBL_OFFICE_PHONE',
          ) ,
          1 => 'phone_mobile',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'reports_to_name',
            'label' => 'LBL_REPORTS_TO_NAME',
            'customCode' => '{if $EDIT_REPORTS_TO}<input type="text" name="{$fields.reports_to_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.reports_to_name.name}" size="" value="{$fields.reports_to_name.value}" title="" autocomplete="off" >{$REPORTS_TO_JS}<input type="hidden" name="{$fields.reports_to_id.name}" id="{$fields.reports_to_id.name}" value="{$fields.reports_to_id.value}"> <span class="id-ff multiple"><button type="button" name="btn_{$fields.reports_to_name.name}" tabindex="0" title="{$APP.LBL_SELECT_BUTTON_TITLE}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick=\'open_popup("{$fields.reports_to_name.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"reports_to_id","name":"reports_to_name"}}{/literal}, "single", true);\'><img src="themes/default/images/id-ff-select.png?v=igGzALk_bn-xeyTYyoHxog"     alt="Select" /></button><button type="button" name="btn_clr_{$fields.reports_to_name.name}" tabindex="0" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" class="button lastChild" onclick="this.form.{$fields.reports_to_name.name}.value = \'\'; this.form.{$fields.reports_to_id.name}.value = \'\';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}"><img src="themes/default/images/id-ff-clear.png?v=igGzALk_bn-xeyTYyoHxog"     alt="Clear" /></button></span>{else}{$fields.reports_to_name.value}<input type="hidden" name="{$fields.reports_to_id.name}" id="{$fields.reports_to_id.name}" value="{$fields.reports_to_id.value}">{/if}',
          ),
          1 => 'phone_other',
        ),
        5 => 
        array (
          0 => 'phone_home',
          1 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX',
          ),
        ),
        6 => 
        array (
          0 => 'messenger_type',
          1 => 'messenger_id',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_NOTES',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'address_street',
            'type' => 'text',
            'label' => 'LBL_PRIMARY_ADDRESS',
            'displayParams' => 
            array (
              'rows' => 2,
              'cols' => 30,
            ),
          ),
          1 => 
          array (
            'name' => 'address_city',
            'label' => 'LBL_CITY',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'address_state',
            'label' => 'LBL_STATE',
          ),
          1 => 
          array (
            'name' => 'address_postalcode',
            'label' => 'LBL_POSTAL_CODE',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'address_country',
            'label' => 'LBL_COUNTRY',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'label' => 'LBL_EMAIL',
          ),
        ),
        12 => 
        array (
          0 => array (
            'name' => 'employee_unite_travail',
            'studio' => 'visible',
            'label' => 'LBL_EMPLOYEE_UNITE_TRAVAIL',
          ),
          1 => array (
            'name' => 'employee_service',
            'studio' => 'visible',
            'label' => 'LBL_EMPLOYEE_SERVICE',
          )
        ),
        13 => 
        array (
          0 => array (
            'name' => 'employee_direction',
            'studio' => 'visible',
            'label' => 'LBL_EMPLOYEE_DIRECTION',
          ),
          1 => array (
            'name' => 'employee_pole',
            'studio' => 'visible',
            'label' => 'LBL_EMPLOYEE_POLE',
          )
        ),
        14 => 
        array (
          0 => array (
            'name' => 'employee_direction_generale',
            'studio' => 'visible',
            'label' => 'LBL_EMPLOYEE_DIRECTION_GENERALE',
          ),
          1 => ''
        ),
      ),
    ),
  ),
);
$viewdefs['Employees']['EditView']['templateMeta'] = array (
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
    'DEFAULT' => 
    array (
      'newTab' => true,
      'panelDefault' => 'expanded',
    ),
  ),
);
?>
