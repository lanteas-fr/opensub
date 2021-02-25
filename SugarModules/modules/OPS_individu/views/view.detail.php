<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class OPS_individuViewDetail extends ViewDetail {


    function OPS_individuViewDetail(){
        parent::ViewDetail();
    }

    function display(){
        global $mod_strings, $app_strings, $app_list_strings, $beanFiles, $current_user;;

        if(empty($this->bean->id)){
            sugar_die($app_strings['ERROR_NO_RECORD']);
        }

        $this->dv->process();
        
        // Création du bouton de création d'une dossier
        $str_creer_dossier .= '<input title="Création d\'un dossier" class="button" type="button"
                                    onclick="var _form = document.getElementById(\'formDetailView\'); 
                                            _form.action.value=\'dossier\';
                                            _form.submit();"
                                    name="creer_bouton"
                                    value="Créer un dossier">' ;
        
        $this->ss->assign("CREER_DOSSIER", $str_creer_dossier);

        parent::display();
    }
}

