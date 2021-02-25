<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


$dictionary["OPS_dossier"]["fields"]["ops_dispositif_ops_dossier"] = array (
  'name' => 'ops_dispositif_ops_dossier',
  'type' => 'link',
  'relationship' => 'ops_dispositif_ops_dossier',
  'source' => 'non-db',
  'module' => 'OPS_dispositif',
  'bean_name' => 'OPS_dispositif',
  'vname' => 'LBL_OPS_DISPOSITIF_OPS_DOSSIER_FROM_OPS_DISPOSITIF_TITLE',
  'id_name' => 'ops_dispositif_id',
);
$dictionary["OPS_dossier"]["fields"]["ops_dispositif_ops_dossier_name"] = array (
  'name' => 'ops_dispositif_ops_dossier_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_DISPOSITIF_OPS_DOSSIER_FROM_OPS_DISPOSITIF_TITLE',
  'save' => true,
  'id_name' => 'ops_dispositif_id',
  'link' => 'ops_dispositif_ops_dossier',
  'table' => 'ops_dispositif',
  'module' => 'OPS_dispositif',
  'rname' => 'name',
  'inline_edit' => false,
);
$dictionary["OPS_dossier"]["fields"]["ops_dispositif_id"] = array (
  'name' => 'ops_dispositif_id',
  'type' => 'link',
  'relationship' => 'ops_dispositif_ops_dossier',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_DISPOSITIF_OPS_DOSSIER_FROM_OPS_DOSSIER_TITLE',
);
