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

$dashletMeta['OPS_statutDashlet'] = array(
    'module' => 'OPS_statut',
    'title' => translate('LBL_HOMEPAGE_TITLE', 'OPS_statut'),
    'description' => 'A customizable view into OPS_statut',
    'category' => 'Module Views'
);