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

$dashletMeta['OPS_engagementDashlet'] = array(
    'module' => 'OPS_engagement',
    'title' => translate('LBL_HOMEPAGE_TITLE', 'OPS_engagement'),
    'description' => 'A customizable view into OPS_engagement',
    'category' => 'Module Views'
);