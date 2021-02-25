<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$dictionary["OPS_dispositif"]["fields"]["ops_guide_instruction_ops_dispositif"] = array (
  'name' => 'ops_guide_instruction_ops_dispositif',
  'type' => 'link',
  'relationship' => 'ops_guide_instruction_ops_dispositif',
  'source' => 'non-db',
  'module' => 'OPS_guide_instruction',
  'bean_name' => 'OPS_guide_instruction',
  'vname' => 'LBL_OPS_GUIDE_INSTRUCTION_OPS_DISPOSITIF_FROM_OPS_GUIDE_INSTRUCTION_TITLE',
  'id_name' => 'ops_guide_instruction_id',
);
$dictionary["OPS_dispositif"]["fields"]["ops_guide_instruction_ops_dispositif_name"] = array (
  'name' => 'ops_guide_instruction_ops_dispositif_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_GUIDE_INSTRUCTION_OPS_DISPOSITIF_FROM_OPS_GUIDE_INSTRUCTION_TITLE',
  'save' => true,
  'id_name' => 'ops_guide_instruction_id',
  'link' => 'ops_guide_instruction_ops_dispositif',
  'table' => 'ops_guide_instruction',
  'module' => 'OPS_guide_instruction',
  'rname' => 'name',
);
$dictionary["OPS_dispositif"]["fields"]["ops_guide_instruction_id"] = array (
  'name' => 'ops_guide_instruction_id',
  'type' => 'link',
  'relationship' => 'ops_guide_instruction_ops_dispositif',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_GUIDE_INSTRUCTION_OPS_DISPOSITIF_FROM_OPS_DISPOSITIF_TITLE',
);
