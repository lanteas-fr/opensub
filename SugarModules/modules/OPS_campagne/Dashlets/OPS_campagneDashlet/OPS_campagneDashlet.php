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
require_once('modules/OPS_campagne/OPS_campagne.php');

class OPS_campagneDashlet extends DashletGeneric {
    function __construct($id, $def = null)
    {
        global $current_user, $app_strings;
        require('modules/OPS_campagne/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if (empty($def['title'])) {
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'OPS_campagne');
        }

        $this->searchFields = $dashletData['OPS_campagneDashlet']['searchFields'];
        $this->columns = $dashletData['OPS_campagneDashlet']['columns'];

        $this->seedBean = new OPS_campagne();        
    }
}
