<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class OPS_individuController extends SugarController
{

    /**
     * Bean that is being handled by the Calendar's current action.
     * @var SugarBean $currentBean
     */
    protected $currentBean = null;

    /**
     * Action dossier 
    */
    protected function action_dossier()
    {    
        global $current_user, $beanFiles;
        
        $module = $this->currentBean->module_dir;
        $bean = $this->currentBean;

        $individu_id = $this->bean->id ;
        $indi = $this->bean->name ;

        SugarApplication::redirect('index.php?action=EditView&module=OPS_dossier&tiers=individu&id_tiers='.$individu_id.'&indi='.$indi);    


    }

}
