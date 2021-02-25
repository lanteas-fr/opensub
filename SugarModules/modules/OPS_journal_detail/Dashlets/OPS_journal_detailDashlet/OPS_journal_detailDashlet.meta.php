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

$dashletMeta['OPS_journal_detailDashlet'] = array(
    'module' => 'OPS_journal_detail',
    'title' => translate('LBL_HOMEPAGE_TITLE', 'OPS_journal_detail'),
    'description' => 'A customizable view into OPS_journal_detail',
    'category' => 'Module Views'
);