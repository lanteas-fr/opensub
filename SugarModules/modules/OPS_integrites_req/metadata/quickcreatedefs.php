<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$module_name = 'OPS_integrites_req';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'ops_integrites_req_ops_integrites_name',
            'label' => 'LBL_OPS_INTEGRITES_REQ_OPS_INTEGRITES_FROM_OPS_INTEGRITES_TITLE',
          ),
        ),
        2 => 
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
        3 => 
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
