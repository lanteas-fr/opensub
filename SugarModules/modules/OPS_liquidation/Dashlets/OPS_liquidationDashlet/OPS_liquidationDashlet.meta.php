<?php
/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

global $app_strings;

$dashletMeta['OPS_liquidationDashlet'] = array(
    'module' => 'OPS_liquidation',
    'title' => translate('LBL_HOMEPAGE_TITLE', 'OPS_liquidation'),
    'description' => 'A customizable view into OPS_liquidation',
    'category' => 'Module Views'
);