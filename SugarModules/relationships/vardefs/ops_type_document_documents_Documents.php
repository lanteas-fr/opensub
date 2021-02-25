<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


$dictionary["Document"]["fields"]["ops_type_document_documents"] = array (
  'name' => 'ops_type_document_documents',
  'type' => 'link',
  'relationship' => 'ops_type_document_documents',
  'source' => 'non-db',
  'module' => 'OPS_type_document',
  'bean_name' => false,
  'vname' => 'LBL_OPS_TYPE_DOCUMENT_DOCUMENTS_FROM_OPS_TYPE_DOCUMENT_TITLE',
  'id_name' => 'ops_type_document_id',
);
$dictionary["Document"]["fields"]["ops_type_document_documents_name"] = array (
  'name' => 'ops_type_document_documents_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_TYPE_DOCUMENT_DOCUMENTS_FROM_OPS_TYPE_DOCUMENT_TITLE',
  'save' => true,
  'id_name' => 'ops_type_document_id',
  'link' => 'ops_type_document_documents',
  'table' => 'ops_type_document',
  'module' => 'OPS_type_document',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["ops_type_document_id"] = array (
  'name' => 'ops_type_document_id',
  'type' => 'link',
  'relationship' => 'ops_type_document_documents',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_TYPE_DOCUMENT_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);
