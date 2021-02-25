<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


$module_name = 'OPS_historisation';
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
      'syncDetailEditViews' => true,
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
            'name' => 'auteur',
            'label' => 'LBL_AUTEUR',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'canal',
            'studio' => 'visible',
            'label' => 'LBL_CANAL',
          ),
          1 => 
          array (
            'name' => 'ops_historisation_ops_dossier_name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'etape',
            'studio' => 'visible',
            'label' => 'LBL_ETAPE',
          ),
          1 => 
          array (
            'name' => 'statut',
            'studio' => 'visible',
            'label' => 'LBL_STATUT',
          ),
        ),
      ),
    ),
  ),
);
;
?>
