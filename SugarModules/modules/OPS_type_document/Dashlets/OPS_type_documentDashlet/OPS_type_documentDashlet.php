<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('include/Dashlets/DashletGeneric.php');
require_once('modules/OPS_type_document/OPS_type_document.php');

class OPS_type_documentDashlet extends DashletGeneric {
    function __construct($id, $def = null)
    {
        global $current_user, $app_strings;
        require('modules/OPS_type_document/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if (empty($def['title'])) {
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'OPS_type_document');
        }

        $this->searchFields = $dashletData['OPS_type_documentDashlet']['searchFields'];
        $this->columns = $dashletData['OPS_type_documentDashlet']['columns'];

        $this->seedBean = new OPS_type_document();        
    }
}
