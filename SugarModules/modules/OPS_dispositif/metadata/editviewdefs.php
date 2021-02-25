<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


$module_name = 'OPS_dispositif';
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
          0 => 
          array (
            'name' => 'cle',
            'label' => 'LBL_CLE',
          ),
          1 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'type_depense',
            'studio' => 'visible',
            'label' => 'LBL_TYPE_DEPENSE',
          ),
          1 => array(
              'name' => 'thematique',
              'label' => 'LBL_THEMATIQUE'
          )
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ops_guide_instruction_ops_dispositif_name',
            'label' => 'LBL_OPS_GUIDE_INSTRUCTION_OPS_DISPOSITIF_FROM_OPS_GUIDE_INSTRUCTION_TITLE',
          ),
          1 => 
          array (
            'name' => 'exercice',
            'label' => 'LBL_EXERCICE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'debut_realisation',
            'label' => 'LBL_DEBUT_REALISATION',
          ),
          1 => 
          array (
            'name' => 'fin_realisation',
            'label' => 'LBL_FIN_REALISATION',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'debut_caducite',
            'label' => 'LBL_DEBUT_CADUCITE',
          ),
          1 => 
          array (
            'name' => 'fin_caducite',
            'label' => 'LBL_FIN_CADUCITE',
          ),
        ),
      ),
    ),
  ),
);

?>
