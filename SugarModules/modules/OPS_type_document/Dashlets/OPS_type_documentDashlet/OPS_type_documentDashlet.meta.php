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

$dashletMeta['OPS_type_documentDashlet'] = array(
    'module' => 'OPS_type_document',
    'title' => translate('LBL_HOMEPAGE_TITLE', 'OPS_type_document'),
    'description' => 'A customizable view into OPS_type_document',
    'category' => 'Module Views'
);