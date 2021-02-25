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

$dashletMeta['OPS_eluDashlet'] = array(
    'module' => 'OPS_elu',
    'title' => translate('LBL_HOMEPAGE_TITLE', 'OPS_elu'),
    'description' => 'A customizable view into OPS_elu',
    'category' => 'Module Views'
);