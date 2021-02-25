<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


require_once('include/MVC/View/views/view.edit.php');

class OPS_integrites_reqViewEdit extends ViewEdit {

    function OPS_integrites_reqViewEdit(){
            parent::ViewEdit();
    }

    function display() {
        global $app_list_strings;
        
        // Création des champs avec mises en forme
        require_once('include/SugarTinyMCE.php');
        $tiny = new SugarTinyMCE();
        $tiny->defaultConfig['apply_source_formatting']=true;
        $tiny->defaultConfig['cleanup_on_startup']=true;
        $tiny->defaultConfig['relative_urls']=false;
        $tiny->defaultConfig['convert_urls']=false;

        $ed = $tiny->getInstance('conseil');
        $this->ss->assign('tiny_script', $ed);


        parent::display();
    }
}
?>