<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$module_name = 'OPS_appairage';
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
                'name' => 'date_entered',
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
          1 => 'date_entered',
        ),
        array (
          0 => 'parent_name',
          1 => 'parent_type',
        ),
      ),
    ),
  ),
);
;
?>
