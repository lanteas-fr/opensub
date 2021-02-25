<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$module_name = 'OPS_type_document';
$searchdefs[$module_name] =
  array(
    'layout' =>
    array(
      'basic_search' =>
      array(
        0 => 'name',
        1 =>
        array(
          'name' => 'current_user_only',
          'label' => 'LBL_CURRENT_USER_FILTER',
          'type' => 'bool',
        ),
      ),
      'advanced_search' =>
      array(
        'identifiant' =>
        array(
          'type' => 'varchar',
          'label' => 'LBL_IDENTIFIANT',
          'width' => '10%',
          'default' => true,
          'name' => 'identifiant',
        ),
        'name' =>
        array(
          'name' => 'name',
          'default' => true,
          'width' => '10%',
        ),
        'objet' =>
        array(
          'type' => 'radioenum',
          'studio' => 'visible',
          'label' => 'LBL_OBJET',
          'width' => '10%',
          'default' => true,
          'name' => 'objet',
        ),
        'import' =>
        array(
          'type' => 'bool',
          'default' => true,
          'label' => 'LBL_IMPORT',
          'width' => '10%',
          'name' => 'import',
        ),
        'type_gru' =>
        array(
          'type' => 'varchar',
          'label' => 'LBL_TYPE_GRU',
          'width' => '10%',
          'default' => true,
          'name' => 'type_gru',
        ),
        'statut' =>
        array(
          'type' => 'bool',
          'studio' => 'visible',
          'label' => 'LBL_STATUT',
          'width' => '10%',
          'default' => true,
          'name' => 'statut',
        ),
        'document_unique' =>
        array(
          'type' => 'bool',
          'default' => true,
          'label' => 'LBL_DOCUMENT_UNIQUE',
          'width' => '10%',
          'name' => 'document_unique',
        ),
      ),
    ),
    'templateMeta' =>
    array(
      'maxColumns' => '3',
      'maxColumnsBasic' => '4',
      'widths' =>
      array(
        'label' => '10',
        'field' => '30',
      ),
    ),
  );;
