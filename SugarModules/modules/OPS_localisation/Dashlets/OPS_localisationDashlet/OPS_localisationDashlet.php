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
require_once('modules/OPS_localisation/OPS_localisation.php');

class OPS_localisationDashlet extends DashletGeneric {
    function __construct($id, $def = null)
    {
        global $current_user, $app_strings;
        require('modules/OPS_localisation/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if (empty($def['title'])) {
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'OPS_localisation');
        }

        $this->searchFields = $dashletData['OPS_localisationDashlet']['searchFields'];
        $this->columns = $dashletData['OPS_localisationDashlet']['columns'];

        $this->seedBean = new OPS_localisation();        
    }
}
