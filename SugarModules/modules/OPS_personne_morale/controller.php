<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class OPS_personne_moraleController extends SugarController
{


    protected $currentBean = null;


    protected function action_dossier()
    {    
        global $current_user, $beanFiles;
        
        $module = $this->currentBean->module_dir;
        $bean = $this->currentBean;

        $individu_id = $this->bean->id ;
        $indi = $this->bean->name ;

        SugarApplication::redirect('index.php?action=EditView&module=OPS_dossier&tiers=pm&id_tiers='.$individu_id.'&indi='.$indi);    


    }

}
