<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


$module_name = 'OPS_historisation';
$listViewDefs [$module_name] = 
array (
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'CANAL' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CANAL',
    'width' => '10%',
    'default' => true,
  ),
  'ETAPE' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ETAPE',
    'id' => 'OPS_ETAPE_ID',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'STATUT' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_STATUT',
    'id' => 'OPS_STATUT_ID',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'AUTEUR' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_AUTEUR',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
