<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$layout_defs["OPS_dossier"]["subpanel_setup"]['ops_dossier_ops_journal'] = array (
  'order' => 100,
  'module' => 'OPS_journal',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'name',
  'title_key' => 'LBL_OPS_DOSSIER_OPS_JOURNAL_FROM_OPS_JOURNAL_TITLE',
  'get_subpanel_data' => 'ops_dossier_ops_journal',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
