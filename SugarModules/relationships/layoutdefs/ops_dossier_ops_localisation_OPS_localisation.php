<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$layout_defs["OPS_localisation"]["subpanel_setup"]['ops_dossier_ops_localisation'] = array (
  'order' => 100,
  'module' => 'OPS_dossier',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPS_DOSSIER_OPS_LOCALISATION_FROM_OPS_DOSSIER_TITLE',
  'get_subpanel_data' => 'ops_dossier_ops_localisation',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
