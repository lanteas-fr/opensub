<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


$dictionary["OPS_tranche"]["fields"]["ops_tranche_ops_exercice"] = array (
  'name' => 'ops_tranche_ops_exercice',
  'type' => 'link',
  'relationship' => 'ops_tranche_ops_exercice',
  'source' => 'non-db',
  'module' => 'OPS_exercice',
  'bean_name' => 'OPS_exercice',
  'vname' => 'LBL_OPS_TRANCHE_OPS_EXERCICE_FROM_OPS_EXERCICE_TITLE',
  'id_name' => 'ops_exercice_id',
);
$dictionary["OPS_tranche"]["fields"]["ops_tranche_ops_exercice_name"] = array (
  'name' => 'ops_tranche_ops_exercice_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_TRANCHE_OPS_EXERCICE_FROM_OPS_EXERCICE_TITLE',
  'save' => true,
  'id_name' => 'ops_exercice_id',
  'link' => 'ops_tranche_ops_exercice',
  'table' => 'ops_exercice',
  'module' => 'OPS_exercice',
  'rname' => 'name',
);
$dictionary["OPS_tranche"]["fields"]["ops_exercice_id"] = array (
  'name' => 'ops_exercice_id',
  'type' => 'link',
  'relationship' => 'ops_tranche_ops_exercice',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_TRANCHE_OPS_EXERCICE_FROM_OPS_TRANCHE_TITLE',
);
