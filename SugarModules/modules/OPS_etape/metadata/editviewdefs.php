<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


$module_name = 'OPS_etape';
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
      'syncDetailEditViews' => false,
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
            'name' => 'retour_arriere',
            'label' => 'LBL_RETOUR_ARRIERE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'etape_precedente',
            'label' => 'LBL_ETAPE_PRECEDENTE',
          ),
          1 =>   array (
            'name' => 'ops_guide_instruction_ops_etape_name',
          ),
        ),
        2 => 
        array (
          0 => array(
                        'name'  => 'ordre',
                        'label' => 'LBL_ORDRE',
        ),
          1 =>  'description',
        ),
      ),
    ),
  ),
);

?>
