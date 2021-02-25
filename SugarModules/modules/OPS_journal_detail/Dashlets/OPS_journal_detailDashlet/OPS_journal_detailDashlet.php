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
require_once('modules/OPS_journal_detail/OPS_journal_detail.php');

class OPS_journal_detailDashlet extends DashletGeneric {
    function __construct($id, $def = null)
    {
        global $current_user, $app_strings;
        require('modules/OPS_journal_detail/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if (empty($def['title'])) {
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'OPS_journal_detail');
        }

        $this->searchFields = $dashletData['OPS_journal_detailDashlet']['searchFields'];
        $this->columns = $dashletData['OPS_journal_detailDashlet']['columns'];

        $this->seedBean = new OPS_journal_detail();        
    }
}
