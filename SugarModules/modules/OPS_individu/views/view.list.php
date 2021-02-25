<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.list.php');

class OPS_individuViewList extends ViewList {


    function OPS_individuViewList(){
        parent::ViewList();
    }

    function preDisplay() { 
          
        if(empty($_REQUEST['orderBy'])) { 

            $_REQUEST['orderBy'] = strtoupper('name');            
            $_REQUEST['sortOrder'] = 'ASC'; 
         } 
         parent::preDisplay(); 
     }
}

