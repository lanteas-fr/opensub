<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$layout_defs["OPS_etape"]["subpanel_setup"]['ops_etape_ops_statut'] = array (
  'order' => 100,
  'module' => 'OPS_statut',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPS_ETAPE_OPS_STATUT_FROM_OPS_STATUT_TITLE',
  'get_subpanel_data' => 'ops_etape_ops_statut',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
  ),
);
