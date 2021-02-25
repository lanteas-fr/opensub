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
require_once('modules/OPS_guide_instruction/OPS_guide_instruction.php');

class OPS_guide_instructionDashlet extends DashletGeneric {
    function __construct($id, $def = null)
    {
        global $current_user, $app_strings;
        require('modules/OPS_guide_instruction/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if (empty($def['title'])) {
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'OPS_guide_instruction');
        }

        $this->searchFields = $dashletData['OPS_guide_instructionDashlet']['searchFields'];
        $this->columns = $dashletData['OPS_guide_instructionDashlet']['columns'];

        $this->seedBean = new OPS_guide_instruction();        
    }
}
