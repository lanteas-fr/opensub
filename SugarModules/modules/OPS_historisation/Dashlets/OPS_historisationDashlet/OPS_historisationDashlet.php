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
require_once('modules/OPS_historisation/OPS_historisation.php');

class OPS_historisationDashlet extends DashletGeneric {
    function __construct($id, $def = null)
    {
        global $current_user, $app_strings;
        require('modules/OPS_historisation/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if (empty($def['title'])) {
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'OPS_historisation');
        }

        $this->searchFields = $dashletData['OPS_historisationDashlet']['searchFields'];
        $this->columns = $dashletData['OPS_historisationDashlet']['columns'];

        $this->seedBean = new OPS_historisation();        
    }
}
