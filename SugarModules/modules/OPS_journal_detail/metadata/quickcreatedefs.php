<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$module_name = 'OPS_journal_detail';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'ops_journal_detail_ops_journal_name',
            'label' => 'LBL_OPS_JOURNAL_DETAIL_OPS_JOURNAL_FROM_OPS_JOURNAL_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'tache',
            'label' => 'LBL_TACHE',
          ),
          1 => 
          array (
            'name' => 'reponse',
            'label' => 'LBL_REPONSE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'statut',
            'studio' => 'visible',
            'label' => 'LBL_STATUT',
          ),
          1 => 
          array (
            'name' => 'erreur',
            'label' => 'LBL_ERREUR',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
;
?>
