<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


$dictionary["Document"]["fields"]["ops_individu_documents"] = array (
  'name' => 'ops_individu_documents',
  'type' => 'link',
  'relationship' => 'ops_individu_documents',
  'source' => 'non-db',
  'module' => 'OPS_individu',
  'bean_name' => 'OPS_individu',
  'vname' => 'LBL_OPS_INDIVIDU_DOCUMENTS_FROM_OPS_INDIVIDU_TITLE',
  'id_name' => 'ops_individu_id',
);
$dictionary["Document"]["fields"]["ops_individu_documents_name"] = array (
  'name' => 'ops_individu_documents_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_INDIVIDU_DOCUMENTS_FROM_OPS_INDIVIDU_TITLE',
  'save' => true,
  'id_name' => 'ops_individu_id',
  'link' => 'ops_individu_documents',
  'table' => 'ops_individu',
  'module' => 'OPS_individu',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["ops_individu_id"] = array (
  'name' => 'ops_individu_id',
  'type' => 'link',
  'relationship' => 'ops_individu_documents',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_INDIVIDU_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);
