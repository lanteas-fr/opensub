<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$module_name = 'OPS_integrites_req';
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
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
          0 => 'name',
          1 => 
          array (
            'name' => 'ops_integrites_req_ops_integrites_name',
            'label' => 'LBL_OPS_INTEGRITES_REQ_OPS_INTEGRITES_FROM_OPS_INTEGRITES_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 'description',
        ),
        2 =>
        array (
          0 => 
            array (
              'name' => 'conseil',
              'label' => 'LBL_CONSEIL',
              'customCode' => '{$fields.conseil.value|from_html}',
            )
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'nivlog',
            'studio' => 'visible',
            'label' => 'LBL_NIVLOG',
          ),
          1 => 
          array (
            'name' => 'choix_module',
            'studio' => 'visible',
            'label' => 'LBL_CHOIX_MODULE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'actif',
            'label' => 'LBL_ACTIF',
          ),
        ),
      ),
    ),
  ),
);
;
?>
