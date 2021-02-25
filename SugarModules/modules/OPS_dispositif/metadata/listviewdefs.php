<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


$module_name = 'OPS_dispositif';
$listViewDefs [$module_name] = 
array (
  'CLE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CLE',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'TYPE_DEPENSE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE_DEPENSE',
    'width' => '10%',
    'default' => true,
  ),
  'THEMATIQUE' => 
  array (
    'type' => 'multienum',
    'studio' => 'visible',
    'label' => 'LBL_THEMATIQUE',
    'width' => '10%',
    'default' => true,
  ),
  'OPS_GUIDE_INSTRUCTION_OPS_DISPOSITIF_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_OPS_GUIDE_INSTRUCTION_OPS_DISPOSITIF_FROM_OPS_GUIDE_INSTRUCTION_TITLE',
    'id' => 'OPS_GU4D6BRUCTION_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DEBUT_CADUCITE' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DEBUT_CADUCITE',
    'width' => '10%',
    'default' => false,
  ),
  'FIN_REALISATION' => 
  array (
    'type' => 'int',
    'label' => 'LBL_FIN_REALISATION',
    'width' => '10%',
    'default' => false,
  ),
  'FIN_CADUCITE' => 
  array (
    'type' => 'int',
    'label' => 'LBL_FIN_CADUCITE',
    'width' => '10%',
    'default' => false,
  ),
  'DEBUT_REALISATION' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DEBUT_REALISATION',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
