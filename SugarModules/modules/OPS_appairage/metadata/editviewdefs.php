<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$module_name = 'OPS_appairage';
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
        array (
            0 => array (
                'name' => 'name',
                'label' => 'LBL_NAME',
            ), 
            1 => array (
                'name' => 'parent_name',
            ),
        ),
        array (
          0 => 'logiciel',
          1 => 'description',
        ),
        array (
          0 => array (
            'name' => 'statut',
            'studio' => 'visible',
            'label' => 'LBL_STATUT',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
