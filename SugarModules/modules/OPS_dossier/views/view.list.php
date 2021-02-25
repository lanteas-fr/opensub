<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.list.php');

class OPS_dossierViewList extends ViewList {


    function OPS_dossierViewList(){
        parent::ViewList();
    }

    function preDisplay() { 
          
        if(empty($_REQUEST['orderBy'])) { 

            $_REQUEST['orderBy'] = strtoupper('num_dossier');            
            $_REQUEST['sortOrder'] = 'ASC'; 
         } 
         parent::preDisplay(); 
     }
}