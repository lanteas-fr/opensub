<?php 

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$dictionary["Document"]["fields"]["ops_dossier_documents"] = array (
  'name' => 'ops_dossier_documents',
  'type' => 'link',
  'relationship' => 'ops_dossier_documents',
  'source' => 'non-db',
  'module' => 'OPS_dossier',
  'bean_name' => 'OPS_dossier',
  'vname' => 'LBL_OPS_DOSSIER_DOCUMENTS_FROM_OPS_DOSSIER_TITLE',
  'id_name' => 'ops_dossier_id',
);
$dictionary["Document"]["fields"]["ops_dossier_documents_name"] = array (
  'name' => 'ops_dossier_documents_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_DOSSIER_DOCUMENTS_FROM_OPS_DOSSIER_TITLE',
  'save' => true,
  'id_name' => 'ops_dossier_id',
  'link' => 'ops_dossier_documents',
  'table' => 'ops_dossier',
  'module' => 'OPS_dossier',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["ops_dossier_id"] = array (
  'name' => 'ops_dossier_id',
  'type' => 'link',
  'relationship' => 'ops_dossier_documents',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_DOSSIER_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);
$dictionary["Document"]["fields"]["ops_dossier_documents"] = array (
  'name' => 'ops_dossier_documents',
  'type' => 'link',
  'relationship' => 'ops_dossier_documents',
  'source' => 'non-db',
  'module' => 'OPS_dossier',
  'bean_name' => 'OPS_dossier',
  'vname' => 'LBL_OPS_DOSSIER_DOCUMENTS_FROM_OPS_DOSSIER_TITLE',
  'id_name' => 'ops_dossier_id',
);
$dictionary["Document"]["fields"]["ops_dossier_documents_name"] = array (
  'name' => 'ops_dossier_documents_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_DOSSIER_DOCUMENTS_FROM_OPS_DOSSIER_TITLE',
  'save' => true,
  'id_name' => 'ops_dossier_id',
  'link' => 'ops_dossier_documents',
  'table' => 'ops_dossier',
  'module' => 'OPS_dossier',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["ops_dossier_id"] = array (
  'name' => 'ops_dossier_id',
  'type' => 'link',
  'relationship' => 'ops_dossier_documents',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_DOSSIER_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);

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

$dictionary["Document"]["fields"]["ops_dossier_documents"] = array (
  'name' => 'ops_dossier_documents',
  'type' => 'link',
  'relationship' => 'ops_dossier_documents',
  'source' => 'non-db',
  'module' => 'OPS_dossier',
  'bean_name' => 'OPS_dossier',
  'vname' => 'LBL_OPS_DOSSIER_DOCUMENTS_FROM_OPS_DOSSIER_TITLE',
  'id_name' => 'ops_dossier_id',
);
$dictionary["Document"]["fields"]["ops_dossier_documents_name"] = array (
  'name' => 'ops_dossier_documents_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_DOSSIER_DOCUMENTS_FROM_OPS_DOSSIER_TITLE',
  'save' => true,
  'id_name' => 'ops_dossier_id',
  'link' => 'ops_dossier_documents',
  'table' => 'ops_dossier',
  'module' => 'OPS_dossier',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["ops_dossier_id"] = array (
  'name' => 'ops_dossier_id',
  'type' => 'link',
  'relationship' => 'ops_dossier_documents',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_DOSSIER_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);

$dictionary["Document"]["fields"]["importable"] = array (
'required' => false,
'name' => 'importable',
'vname' => 'LBL_IMPORTABLE',
'type' => 'bool',
'massupdate' => 0,
'default' => '0',
'no_default' => false,
'comments' => '',
'help' => '',
'importable' => 'true',
'duplicate_merge' => 'disabled',
'duplicate_merge_dom_value' => '0',
'audited' => false,
'inline_edit' => true,
'reportable' => true,
'unified_search' => false,
'merge_filter' => 'disabled',
'len' => '255',
'size' => '20',
);







?>