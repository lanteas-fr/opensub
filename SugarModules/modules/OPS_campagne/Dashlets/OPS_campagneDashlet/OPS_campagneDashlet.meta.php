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

$dashletMeta['OPS_campagneDashlet'] = array(
    'module' => 'OPS_campagne',
    'title' => translate('LBL_HOMEPAGE_TITLE', 'OPS_campagne'),
    'description' => 'A customizable view into OPS_campagne',
    'category' => 'Module Views'
);