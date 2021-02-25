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
require_once('modules/OPS_individu_role/OPS_individu_role.php');

class OPS_individu_roleDashlet extends DashletGeneric {
    function __construct($id, $def = null)
    {
        global $current_user, $app_strings;
        require('modules/OPS_individu_role/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if (empty($def['title'])) {
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'OPS_individu_role');
        }

        $this->searchFields = $dashletData['OPS_individu_roleDashlet']['searchFields'];
        $this->columns = $dashletData['OPS_individu_roleDashlet']['columns'];

        $this->seedBean = new OPS_individu_role();        
    }
}
