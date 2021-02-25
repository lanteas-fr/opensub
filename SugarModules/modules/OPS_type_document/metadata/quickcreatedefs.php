<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$module_name = 'OPS_type_document';
$viewdefs[$module_name] =
  array(
    'QuickCreate' =>
    array(
      'templateMeta' =>
      array(
        'maxColumns' => '2',
        'widths' =>
        array(
          0 =>
          array(
            'label' => '10',
            'field' => '30',
          ),
          1 =>
          array(
            'label' => '10',
            'field' => '30',
          ),
        ),
        'useTabs' => false,
        'tabDefs' =>
        array(
          'DEFAULT' =>
          array(
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
        ),
      ),
      'panels' =>
      array(
        'default' =>
        array(
          0 =>
          array(
            0 =>
            array(
              'name' => 'identifiant',
              'label' => 'LBL_IDENTIFIANT',
            ),
            1 => 'name',
          ),
          1 =>
          array(
            0 =>
            array(
              'name' => 'objet',
              'studio' => 'visible',
              'label' => 'LBL_OBJET',
            ),
            1 =>
            array(
              'name' => 'import',
              'label' => 'LBL_IMPORT',
            ),
          ),
          2 =>
          array(
            0 =>
            array(
              'name' => 'type_gru',
              'label' => 'LBL_TYPE_GRU',
            ),
            1 =>
            array(
              'name' => 'statut',
              'studio' => 'visible',
              'label' => 'LBL_STATUT',
            ),
          ),
          3 =>
          array(
            0 =>
            array(
              'name' => 'document_unique',
              'label' => 'LBL_DOCUMENT_UNIQUE',
            ),
            1 => '',
          ),
        ),
      ),
    ),
  );;
