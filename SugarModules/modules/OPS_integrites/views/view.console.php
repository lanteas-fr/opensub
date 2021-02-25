<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/MVC/View/SugarView.php');

class OPS_integritesViewconsole extends SugarView {
    
    function OPS_integritesViewconsole(){
        parent::SugarView();
    }
    
    function display() {
        global $mod_strings, $app_strings, $app_list_strings, $beanFiles;

        if (isset($_REQUEST['launch_query'])) {
            $this->launch_query();
        } else if (isset($_REQUEST['save_query'])) {
            $this->save_query();
        } else {

            $this->ss->assign('APP',$app_strings);
            $this->ss->assign('APP_LIST',$app_list_strings);
            $this->ss->assign('MOD',$mod_strings);
            require_once($beanFiles['OPS_integrites']);
            require_once($beanFiles['OPS_integrites_req']);

            $obj_integrite = new OPS_integrites(); 
            $list_integrite = $obj_integrite->get_full_list("name","","","");
            
            foreach ($list_integrite as $key => $uneIntegrite) {
                $uneIntegrite->requetes = $uneIntegrite->get_linked_beans('ops_integrites_req_ops_integrites', 'OPS_integrites_req');
            }

            $this->ss->assign('LISTE_INTEGRITES', $list_integrite);
            echo $this->ss->fetch("modules/OPS_integrites/tpls/console_activation.tpl");
        }
    }
    
    function launch_query() {
        global $beanFiles, $db;

        $test = true;

        require_once($beanFiles['OPS_integrites']);
        require_once($beanFiles['OPS_integrites_req']);

        $nbre_requete_actives = 0;
        $obj_integrite = new OPS_integrites(); 
        $list_integrite = $obj_integrite->get_full_list("name","","","");
        
        
        foreach ($list_integrite as $key => $uneIntegrite) {
            $list_value = array();
            $list_keys = array();

            $list_integrite_req = $uneIntegrite->get_linked_beans('ops_integrites_req_ops_integrites', 'OPS_integrites_req');
            $uneIntegrite->requetes = array();
           
            foreach ( $list_integrite_req as $clef => $une_requete ) {

                $nb_fatal = 0;
                $nb_warning = 0;
                $nb_ok = 0;

                $ma_requete = $une_requete->retrieve($une_requete->id);
                $numero_requete = "requete_checkbox" . $ma_requete->id;

                if($_REQUEST[$numero_requete] != NULL) {
                    $ma_requete->actif = 1;
                    $nbre_requete_actives++;
                } else {
                    $ma_requete->actif = 0;
                }
                $ma_requete->save();

                if ($ma_requete->actif == 1) {
                    $req = $db->query("SELECT COUNT(id) FROM " . strtolower($ma_requete->choix_module));
                    if (!$req) {
                        $ma_requete->total = 0;
                        $uneIntegrite->requetes[] = $ma_requete;
                    } else {
                        $req = $db->query($ma_requete->description);
                        if(!$req) {
                            if($ma_requete->nivlog == 1)
                                $nb_ok++;
                            else if($ma_requete->nivlog == 2)
                                $nb_warning++;
                            else if($ma_requete->nivlog == 3)
                                $nb_fatal++;

                            $ma_requete->total = 1;
                            $uneIntegrite->requetes[] = $ma_requete;
                            $list_value = array();
                            $list_value[0][] = "Erreur de requête : <a href='index.php?module=OPS_integrites_req&action=DetailView&record=$ma_requete->id'>Modifier</a>";
                            $ma_requete->liste_valeurs = $list_value;
                            
                        } else {
                            $result = $req->fetch_assoc();
                            
                            if($ma_requete->nivlog == 1)
                                $nb_ok++;
                            else if($ma_requete->nivlog == 2)
                                $nb_warning++;
                            else if($ma_requete->nivlog == 3)
                                $nb_fatal++;


                            $list_keys = array_keys($result);
                            if (sizeof($list_keys) < 1) {
                                $ma_requete->total = 0;
                                $uneIntegrite->requetes[] = $ma_requete;
                            } else {
                                
                                $list_value = array();
                                $liste_cle = array();
                                $ma_requete->liste_cles = $list_keys;
                                
                                $id = "";
                                $numero_de_ligne = 0;

                                foreach($list_keys as $key) {
                                    if(gettype($key) == "string") {
                                        if($key == "id") {
                                            $id = $key;
                                        } else {
                                            $liste_cle[] = $key;
                                        }
                                    }
                                }
                                $label_objet = "";
                                foreach ($result as $key => $value) {
                                    if(gettype($key) == "string") {
                                        if($key == "id") {
                                            $id = $value;
                                        } else if ($key == "label_objet") {
                                            $label_objet = $value;
                                        } else {
                                            $list_value[$numero_de_ligne][] = $value;
                                        }
                                    }
                                }

                                $list_value[$numero_de_ligne][] = "<a href='index.php?module=$ma_requete->choix_module&action=DetailView&record=$id'>$label_objet</a>";
                                $numero_de_ligne++;

                                while($result = $req->fetch_assoc()) {
                                    foreach ($result as $key => $value) {
                                        if(gettype($key) == "string") {
                                            if($key == "id") {
                                                $id = $value;
                                            } else if ($key == "label_objet") {
                                                $label_objet = $value;
                                            } else {
                                                $list_value[$numero_de_ligne][] = $value;
                                            }
                                        }
                                    }
                                    $list_value[$numero_de_ligne][] = "<a href='index.php?module=$ma_requete->choix_module&action=DetailView&record=$id'>$label_objet</a>";
                                    $numero_de_ligne++;
                                }
                                
                                $ma_requete->total = $numero_de_ligne;
                                $ma_requete->liste_valeurs = $list_value;
                                $uneIntegrite->requetes[] = $ma_requete;
                                $uneIntegrite->nb_fatal = $nb_fatal;
                                $uneIntegrite->nb_warning = $nb_warning;
                                $uneIntegrite->nb_ok = $nb_ok;
                                
                            }
                        }
                    }
                }
            }
        }

        for ($i = 0; $i < sizeof($list_integrite); $i++) {
            
            if(sizeof($list_integrite[$i]->requetes) < 1) {
                array_splice($list_integrite, $i, 1);
                $i--;
            }
        }

    
        if($nbre_requete_actives == 0) { ?>
            <script type="text/javascript">
                alert("Veuillez au moins activer une requête.");
                window.location = "index.php?module=OPS_integrites&action=console";
            </script>
        <?php
            return ;
        }


        $this->ss->assign('LISTE_INTEGRITES', $list_integrite);
        echo $this->ss->fetch("modules/OPS_integrites/tpls/resultat_console_activation.tpl");
    }

    function save_query() {
        global $beanFiles, $db;

        require_once($beanFiles['OPS_integrites']);
        require_once($beanFiles['OPS_integrites_req']);

        $nbre_requete_actives = 0;
        $obj_integrite = new OPS_integrites(); 
        $list_integrite = $obj_integrite->get_full_list("name","","","");
        
        
        foreach ($list_integrite as $key => $uneIntegrite) {
            $list_integrite_req = $uneIntegrite->get_linked_beans('ops_integrites_req_ops_integrites', 'OPS_integrites_req');
            $uneIntegrite->requetes = array();
           
            foreach ( $list_integrite_req as $clef => $une_requete ) {

                $ma_requete = $une_requete->retrieve($une_requete->id);
                $numero_requete = "requete_checkbox" . $ma_requete->id;

                if($_REQUEST[$numero_requete] != NULL) {
                    $ma_requete->actif = 1;
                    $nbre_requete_actives++;
                } else {
                    $ma_requete->actif = 0;
                }
                $ma_requete->save();
            }
        }
        ?>
        <script type="text/javascript">
            window.location = "index.php?module=OPS_integrites&action=console";
        </script>
        <?php
    }
}



    function cmp ($a, $b) {
        if(intval($a->nivlog) == intval($b->nivlog)) {
            return 0;
        }
        return intval($a->nivlog) > intval($b->nivlog) ? -1 : 1;
    }

    function revcmp ($a, $b) {
        if(intval($a->nivlog) == intval($b->nivlog)) {
            return 0;
        }
        return intval($a->nivlog) < intval($b->nivlog) ? -1 : 1;
    }
