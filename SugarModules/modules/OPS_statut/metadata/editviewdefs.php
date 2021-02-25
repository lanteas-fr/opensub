<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$module_name = 'OPS_statut';
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
            'name' => 'code_couleur',
            'label' => 'LBL_CODE_COULEUR',
            'type' => 'ColourPicker',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ops_etape_ops_statut_name',
          ),
          1 => 
          array (
            'name' => 'avancement',
            'studio' => 'visible',
            'label' => 'LBL_AVANCEMENT',
          ),
        ),
        2 => 
       array (
          0 => 'ordre',
          1 => 
          array (
            'name' => 'nom_statut_gru',
            'label' => 'LBL_NOM_STATUT_GRU',
          ),
        ),
      ),
    ),
  ),
);

?>
