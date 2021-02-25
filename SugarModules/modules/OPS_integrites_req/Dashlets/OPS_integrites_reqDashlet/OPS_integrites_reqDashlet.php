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
require_once('modules/OPS_integrites_req/OPS_integrites_req.php');

class OPS_integrites_reqDashlet extends DashletGeneric {
    function __construct($id, $def = null)
    {
        global $current_user, $app_strings;
        require('modules/OPS_integrites_req/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if (empty($def['title'])) {
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'OPS_integrites_req');
        }

        $this->searchFields = $dashletData['OPS_integrites_reqDashlet']['searchFields'];
        $this->columns = $dashletData['OPS_integrites_reqDashlet']['columns'];

        $this->seedBean = new OPS_integrites_req();        
    }
}
