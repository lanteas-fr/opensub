<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

require_once('service/v4_1/SugarWebServiceImplv4_1.php');
require_once('custom/service/ODE/ODEDefinitionsErreurs.php');
require_once('custom/service/ODE/ODEServiceUtils.php');

class ODEServiceImpl extends SugarWebServiceImplv4_1
{
    
    /**
     * set_dossier
     *
     *
     * @param String $session       -- ID de la session
     * @param String $id_dossier    -- ID du dossier à gérer
     * @param String $array_values  -- Tableau de valeurs à mettre à jour
     *
     * @return ID du dossier mis à jour 
     * 
     */
    function set_dossier($session, $id_dossier, $array_values)
    {

        global $beanFiles, $sugar_config;
        
        $error = new SoapError();
        
        // Vérification de la session 
        if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', '', '', '', $error)) {
            $error->set_error('invalid_session');
            self::$helperObject->setFaultObject($error);
            return false;
        }
        
        // Vérification des paramètres d'entrées obligatoires
        if (empty($id_dossier) || empty($array_values)) {
            
            // ERREUR : parametre invalide
            $error->set_error('invalid_parameters');
            self::$helperObject->setFaultObject($error);
            return false;
            
        }
        
        //Tableau des champs à gérer différements
        $champ_exep = array(
            'statut',
            'elus',
            'reunions',
            'commissions'
        );
        
        $obj_dossier = new OPS_dossier();
        $obj_dossier->retrieve($id_dossier);
        
        if (!empty($obj_dossier->id)) {

            // Gestion des champs particuliers 
            foreach ($array_values as $key => $value) {
                
                if (in_array($value['name'], $champ_exep)) {
                    
                    if (!empty($obj_dossier)) {
                        
                        $func   = "traitement_" . $value['name'];
                        $result = $obj_dossier->$func($value['value']);

                        if( strlen($result) != "36" ){

                            // ERREUR : objet inconnu
                            $error->set_error($result);
                            self::$helperObject->setFaultObject($error);
                            return false;

                        }
                        
                        unset($array_values[$key]);
                        
                    } else {
                        
                        // ERREUR : objet inconnu
                        $error->set_error('objet_inconnu');
                        self::$helperObject->setFaultObject($error);
                        return false;
                        
                    }
                    
                }
                
            }
            
            if (!empty($array_values)) {
                
                $array_values[] = array(
                    'name' => 'id',
                    'value' => $id_dossier
                );
                
                $id = $this->set_entry($session, "OPS_dossier", $array_values);
                
            }

            return $id_dossier;

        } else {
            
            // ERREUR : l'enregistrement courant n'existe pas
            $error->set_error('invalid_enregistrement');
            self::$helperObject->setFaultObject($error);
            return false;
            
        }
        
    }
    
    
    /**
     * set_documents_by_objet
     *
     *
     * @param String $session                   -- ID de la session
     * @param String $objet                     -- Parent du document 
     * @param String $id_objet                  -- ID de l'objet
     * @param String $filename                  -- Nom du document
     * @param String $file                      -- Document (encoder base64)
     * @param String $file_type_id              -- Type du document
     * @param String|Integer $file_importable   -- Si le document est importable ou pas  true = '1',1
     *
     * @return ID_file 'Liste documents' -- Array 
     * 
     */
    function set_documents_by_objet($session, $objet, $id_objet, $filename, $file, $file_type_id = '', $file_importable)
    {
        
        global $beanFiles, $sugar_config;
        
        $error = new SoapError();
        $id_retour;
        $app_list_strings = return_app_list_strings_language('fr_FR');
        
        // Vérification de la session 
        if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', '', '', '', $error)) {
            $error->set_error('invalid_session');
            self::$helperObject->setFaultObject($error);
            return false;
        }
        
        // Vérification des paramètres d'entrées obligatoires
        if (empty($objet) || empty($id_objet) || empty($file) || empty($filename) || empty($file_importable) ) {
            
            // ERREUR : parametre invalide
            $error->set_error('invalid_parameters');
            self::$helperObject->setFaultObject($error);
            return false;
            
        } elseif (!array_key_exists($objet, $app_list_strings['moduleList'])) {
            
            // ERREUR : objet inconnu
            $error->set_error('objet_inconnu');
            self::$helperObject->setFaultObject($error);
            return false;
            
        } else {
            
            $obj_module = new $objet();
            $obj_module->retrieve($id_objet);
            
            
            if (empty($obj_module->id)) {
                
                // ERREUR : l'enregistrement courant n'existe pas
                $error->set_error('invalid_enregistrement');
                self::$helperObject->setFaultObject($error);
                return false;
                
            } else {
                
                $new_doc = true;
                
                // Vérification de l'unicité du type de document
                if (!empty($file_type_id)) {
                    
                    $obj_type_document = new OPS_type_document();
                    $obj_type_document->retrieve($file_type_id);
                    
                    // Si type de document unique alors mise à jour du document courant
                    if ($obj_type_document->document_unique == true) {
                        
                        // Vérification de l'existance d'un document sur l'objet courant 
                        $tab_documents = $obj_module->get_linked_beans(strtolower($objet) . '_documents', 'Documents', '', '', '', '0', '');
                        
                        if (count($tab_documents) > 0) {
                            
                            foreach ($tab_documents as $key => $un_document) {
                                
                                $obj_type = $un_document->get_linked_beans('ops_type_document_documents', 'OPS_type_document');
                                
                                $id_type_doc = $obj_type[0]->id;
                                
                                if ($id_type_doc == $obj_type_document->id) {
                                    
                                    $new_doc      = false;
                                    $obj_document = $un_document;
                                    
                                }
                                
                            }
                        }
                        
                    }
                    
                }
                
                if (true == $new_doc) {
                    
                    // Création du document 
                    $obj_document              = new Document();
                    $obj_document->parent_type = $objet;
                    $obj_document->parent_id   = $id_objet;
                    
                }
                
                $obj_document->document_name    = $filename;
                $obj_document->related_doc_id   = $id_objet;
                $obj_document->filename         = $filename;
                $obj_document->importable         = $this->verifie_boolean($file_importable);
                $obj_document->modified_user_id = 1;
                $obj_document->created_by       = 1;
                $obj_document->doc_type         = "Sugar";
                $obj_document->related_doc_id   = null;
                $obj_document->save();
                
                if (!empty($obj_document->id)) {
                    require_once('modules/Documents/DocumentSoap.php');
                    $obj_document_soap = new DocumentSoap();
                    
                    $decodedFile = base64_decode($file);
                    $obj_document_soap->upload_file->set_for_soap($filename, $decodedFile);
                    
                    $ext_pos                                  = strrpos($obj_document_soap->upload_file->stored_file_name, ".");
                    $obj_document_soap->upload_file->file_ext = substr($obj_document_soap->upload_file->stored_file_name, $ext_pos + 1);
                    if (in_array($obj_document_soap->upload_file->file_ext, $sugar_config['upload_badext'])) {
                        $obj_document_soap->upload_file->stored_file_name .= ".txt";
                        $obj_document_soap->upload_file->file_ext = "txt";
                    }
                    
                    $revision                 = new DocumentRevision();
                    $revision->filename       = $obj_document_soap->upload_file->get_stored_file_name();
                    $revision->file_mime_type = $obj_document_soap->upload_file->getMimeSoap($revision->filename);
                    $revision->file_ext       = $obj_document_soap->upload_file->file_ext;
                    //$revision->document_name = ;
                    $revision->revision       = '1';
                    $revision->document_id    = $obj_document->id;
                    $revision->save();
                    
                    $obj_document->document_revision_id = $revision->id;
                    $obj_document->save();
                    
                    $obj_document_soap->upload_file->final_move($revision->id);
                    
                    
                    $obj_module->load_relationship(strtolower($objet) . '_documents');
                    $nom_rel = strtolower($objet) . '_documents';
                    $obj_module->$nom_rel->add($obj_document->id);
                    $obj_module->save();
                    
                    if (!empty($file_type_id)) {
                        $obj_type_document->load_relationship('ops_type_document_documents');
                        $obj_type_document->ops_type_document_documents->add($obj_document->id);
                        $obj_type_document->save();
                    }
                }
            }
        }
        
        return array(
            'id' => $obj_document->id
        );
    }

    /**
     * get_documents_list_by_objet
     *
     *
     * @param String $session    -- ID de la session
     * @param String $objet      -- Parent type de l'appairage 
     * @param String $id_objet   -- ID de l'objet
     * 
     * @return Array 'Liste documents' -- Array 
     * 
     */
    function get_documents_list_by_objet($session, $objet, $id_objet)
    {
        global $beanFiles, $sugar_config;
        
        $error = new SoapError();
        $array_retour;
        $app_list_strings = return_app_list_strings_language('fr_FR');
        
        if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', '', '', '', $error)) {
            $error->set_error('invalid_session');
            self::$helperObject->setFaultObject($error);
            return false;
        }
        
        if (empty($objet) || empty($id_objet)) {
            
            // ERREUR : parametre invalide
            $error->set_error('invalid_parameters');
            self::$helperObject->setFaultObject($error);
            return false;
            
        } elseif (!array_key_exists($objet, $app_list_strings['moduleList'])) {
            
            // ERREUR : objet inconnu
            $error->set_error('objet_inconnu');
            self::$helperObject->setFaultObject($error);
            return false;
            
        } else {
            
            $obj_module = new $objet();
            $obj_module->retrieve($id_objet);
            
            if (!empty($obj_module->id)) {
                
                $tab_documents = $obj_module->get_linked_beans(strtolower($objet) . '_documents', 'Documents', '', '', '', '0', '');
                
                if (count($tab_documents) > 0) {
                    
                    foreach ($tab_documents as $key => $un_document) {
                        
                        $doc_array                  = array();
                        $doc_array['id']            = $un_document->id;
                        $doc_array['document_name'] = $un_document->document_name;
                        $doc_array['date_depot']    = $un_document->date_entered;
                        $doc_array['importable']    = $un_document->importable;
                        
                        $obj_type = $un_document->get_linked_beans('ops_type_document_documents', 'OPS_type_document');
                        
                        $doc_array['type_piece_id']   = $obj_type[0]->id;
                        $doc_array['type_piece_name'] = $obj_type[0]->name;
                        
                        
                        $documentRevisions = BeanFactory::getBean('DocumentRevisions', $un_document->document_revision_id);
                        
                        if (!empty($documentRevisions->filename)) {
                            
                            $doc_array['fichier']['filename']      = $documentRevisions->filename;
                            $doc_array['fichier']['file_contents'] = base64_encode(file_get_contents($sugar_config['upload_dir'] . $un_document->document_revision_id));
                            $doc_array['fichier']['mime_type']     = $documentRevisions->file_mime_type;
                            $doc_array['fichier']['file_id']       = $documentRevisions->id;
                            
                        } else {
                            
                            $doc_array['fichier'] = "Fichier introuvable";
                        }
                        
                        $array_retour[] = $doc_array;
                        
                    }
                    
                } else {
                    
                    $error->set_error('document_null');
                    self::$helperObject->setFaultObject($error);
                    return false;
                    
                }
            } else {
                
                // ERREUR : enregistrement invalide
                $error->set_error('invalid_enregistrement');
                self::$helperObject->setFaultObject($error);
                return;
                
            }
            
        }
        
        return $array_retour;
    }
    
    
    /**
     * get_objet_by_appairage
     *
     *
     * @param String $session           -- ID de la session
     * @param String $objet             -- Parent type de l'appairage 
     * @param String $logiciel          -- Logiciel de l'appairage 
     * @param String $code_appairage    -- Code de l'appairage 
     * 
     * @return Array 'Objet' -- Array 
     * 
     */
    function get_objet_by_appairage($session, $objet, $logiciel, $code_appairage)
    {
        global $app_list_strings;
        
        $error = new SoapError();
        $array_retour;
        $app_list_strings = return_app_list_strings_language('fr_FR');
        
        if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', '', '', '', $error)) {
            $error->set_error('invalid_session');
            self::$helperObject->setFaultObject($error);
            return false;
        }
        
        if (empty($logiciel) || empty($code_appairage)) {
            
            // ERREUR : parametre invalide
            $error->set_error('invalid_parameters');
            self::$helperObject->setFaultObject($error);
            return false;
            
        } elseif (!array_key_exists($objet, $app_list_strings['ops_appairage_type_list'])) {
            
            // ERREUR : objet inconnu
            $error->set_error('objet_inconnu');
            self::$helperObject->setFaultObject($error);
            return false;
            
        } else {
            
            $obj_appairage = new OPS_appairage();
            $un_appairage  = $obj_appairage->retrieve_by_string_fields(array(
                'name' => $code_appairage,
                'logiciel' => $logiciel,
                'parent_type' => $objet
            ));
            
            if (!empty($un_appairage->id) && !empty($un_appairage->parent_id)) {
                
                $array_retour = $this->get_entry($session, $objet, "id", $un_appairage->parent_id);
                
            } else {
                
                // ERREUR : enregistrement invalide
                $error->set_error('invalid_enregistrement');
                self::$helperObject->setFaultObject($error);
                return;
                
            }
        }

        $utils        = new ODEServiceUtils();
        $tab = $utils->formater_html( $array_retour );
        
        return $tab;
        
    }


    /**
     * get_user_by_id
     *
     *
     * @param String $session           -- ID de la session
     * @param String $num_dossier      -- ID de l'utilisateur
     * 
     * @return Array 'Users' -- Array 
     * 
     */
    function get_user_by_id($session, $id_user)
    {
        
        global $app_list_strings, $beanFiles;
        
        require_once($beanFiles["User"]);
        $error = new SoapError();
        $array_retour;
        $app_list_strings = return_app_list_strings_language('fr_FR');
        
        if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', '', '', '', $error)) {
            $error->set_error('invalid_session');
            self::$helperObject->setFaultObject($error);
            return false;
        }
        
        if (empty($id_user) ) {
            
            // ERREUR : parametre invalide
            $error->set_error('invalid_parameters');
            self::$helperObject->setFaultObject($error);
            return false;
            
        } else {
            
            $obj_user = new User();
            $obj_user = $obj_user->retrieve( $id_user );



            if (!empty($obj_user->id) ) {
                
                    $array_retour['id'] = $obj_user->id ; 
                    $array_retour['user_name'] = $obj_user->user_name; 
                    $array_retour['first_name'] = $obj_user->first_name; 
                    $array_retour['last_name'] = $obj_user->last_name; 
                    $array_retour['email1'] = $obj_user->email1; 
                    $array_retour['phone_work'] = $obj_user->phone_work; 
                    $array_retour['unite_travail'] =  $obj_user->employee_unite_travail ; 
                    $array_retour['service'] =  $obj_user->employee_service ; 
                    $array_retour['direction'] = $obj_user->employee_direction ; 
                    $array_retour['pole'] = $obj_user->employee_pole ; 
                    $array_retour['direction_generale'] =  $obj_user->employee_direction_generale ; 
                    $array_retour['boite_aux_lettres'] =$obj_user->boite_aux_lettres ; 

                
            } else {
                
                // ERREUR : enregistrement invalide
                $error->set_error('invalid_enregistrement');
                self::$helperObject->setFaultObject($error);
                return;
                
            }
        }
         
        $utils        = new ODEServiceUtils();
        $tab = $utils->formater_html( $array_retour );
        
        return $tab;

    }


     /**
     * get_tiers_by_id
     *
     *
     * @param String $session     -- ID de la session
     * @param String $type_tiers      -- Type du tiers 
     * @param String $id_tiers      -- ID du tiers 
     * 
     * @return Array 'Tiers' -- Array 
     * 
     */
    function get_tiers_by_id($session, $type_tiers, $id_tiers)
    {
        
        global $app_list_strings, $beanFiles;
        
        require_once($beanFiles["User"]);
        $error = new SoapError();
        $array_retour;
        $app_list_strings = return_app_list_strings_language('fr_FR');
        
        if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', '', '', '', $error)) {
            $error->set_error('invalid_session');
            self::$helperObject->setFaultObject($error);
            return false;
        }
        
        if (empty($type_tiers) || empty($id_tiers)  ) {
            
            // ERREUR : parametre invalide
            $error->set_error('invalid_parameters');
            self::$helperObject->setFaultObject($error);
            return false;
            
        } elseif ($type_tiers == "Individu") {
            
            $obj_indi =  $this->get_entry($session, "OPS_individu", "id", $id_tiers );
            
            if ( empty( $obj_indi ) ) {
                
                $error->set_error('individu_inconnu');
                self::$helperObject->setFaultObject($error);
                return false;
                
            } else {
                
                $array_retour[] = $obj_indi ;
            }
            
            
        } elseif ($type_tiers == "Personne Morale") {
            
            if (array_key_exists('OPS_personne_morale', $app_list_strings['moduleList'])) {
                
                $obj_pm =  $this->get_entry($session, "OPS_personne_morale", "id", $id_tiers );
                
                if ( empty( $obj_pm->id ) ) {
                    
                    $error->set_error('personne_morale_inconnu');
                    self::$helperObject->setFaultObject($error);
                    return false;
                    
                } else {
                    
                    $utils        = new ODEServiceUtils();
                    $tab = $utils->formater_html( $obj_pm );
                    
                    return $tab;
                }
                
            } else {
                
                $error->set_error('module_inconnu');
                self::$helperObject->setFaultObject($error);
                return false;
                
            }
        } else {
            
            $error->set_error('type_tiers_inconnu');
            self::$helperObject->setFaultObject($error);
            return false;
        }
        

    }
    
    
    
    /**
     * get_dossier_by_num
     *
     *
     * @param String $session     -- ID de la session
     * @param String $num_dossier      -- Numéro du dossier
     * 
     * @return Array 'Dossiers' -- Array 
     * 
     */
    function get_dossier_by_num($session, $num_dossier)
    {
        
        global $app_list_strings, $beanFiles;
        
        $error = new SoapError();
        
        if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', '', '', '', $error)) {
            $error->set_error('invalid_session');
            self::$helperObject->setFaultObject($error);
            return false;
        }


        $dispositif = false;
        $campagne = false;
        $reunion = false;
        $commission = false;
        $representant_legal = false;

        $champs_additionnel = array(
            'dispositif_code' => "",
            'campagne_millesime' => "",
            'reunion_type' => "",
            'reunion_date' => "",
            'commission_libelle_long' => "",
            'demandeur_representant_legal_nom' => "",
            'demandeur_representant_legal_prenom' => "",
        );

        $array_retour = $this->get_entry($session, "OPS_dossier", "num_dossier", $num_dossier);
        $array_retour = array_merge( $array_retour, $champs_additionnel );

        if(trim($array_retour['type_tiers']) == "Individu"){
            $obj_dossier = new OPS_dossier();
            $obj_dossier = $obj_dossier->retrieve($array_retour['id']);

            $demandeurs = $obj_dossier->get_linked_beans("ops_individu_ops_dossier","OPS_individu");
            $array_retour['demandeur_id'] = $demandeurs[0]->id;
        } 
        elseif( trim($array_retour['type_tiers']) =="Personne Morale"){

            $obj_dossier = new OPS_dossier();
            $obj_dossier = $obj_dossier->retrieve($array_retour['id']);

            $demandeurs = $obj_dossier->get_linked_beans("ops_personne_morale_ops_dossier","OPS_personne_morale");
            $array_retour['demandeur_id'] = $demandeurs[0]->id;

            // Récupération du Code dispositif
            $dispositif = $this->get_dispositif_by_dossier( $obj_dossier );
            if($dispositif !== false){
                $array_retour['dispositif_code'] = trim($dispositif['cle']);
            }

            // Récupération du Millésime campagne
            $campagne = $this->get_campagne_by_dossier( $obj_dossier );
            if($campagne !== false){
                $array_retour['campagne_millesime'] = trim($campagne['millesime']);
            }

            // Récupération du Type de la réunion et Date de réunion
            $reunion = $this->get_reunion_by_dossier( $obj_dossier );
            if($reunion !== false){
                $array_retour['reunion_type'] = trim($reunion['type_reunion']);
                $array_retour['reunion_date'] = trim($reunion['date_reunion']);
            }

            // Récupération du Libellé long commission
            $commission = $this->get_commission_by_dossier( $obj_dossier );
            if($reunion !== false){
                $array_retour['commission_libelle_long'] = $commission['libelle_long'];
            }
            
            // Récupération du Nom et Prénom du représentant légal de la personne morale bénéficiaire
            if(is_array($demandeurs) && count($demandeurs) == 1){
                $obj_personne_morale = new OPS_personne_morale;
                $obj_personne_morale->retrieve($demandeurs[0]->id);
                if(isset($obj_personne_morale->ops_individu_id) && !empty($obj_personne_morale->ops_individu_id)){
                    $representant_legal = $this->get_individu_by_id($obj_personne_morale->ops_individu_id);
                    if($representant_legal !== false){
                        $array_retour['demandeur_representant_legal_nom'] = trim($representant_legal['first_name']);
                        $array_retour['demandeur_representant_legal_prenom'] = trim($representant_legal['last_name']);
                    }
                }
            }
        }

        $utils        = new ODEServiceUtils();
        $tab = $utils->formater_html( $array_retour );
        

        return $tab;

        
    }
    
 /**
     * get_dossier_by_id
     *
     *
     * @param String $session     -- ID de la session
     * @param String $id_dossier  -- ID du dossier
     * 
     * @return Array 'Dossiers' -- Array 
     * 
     */
    function get_dossier_by_id($session, $id_dossier)
    {

        global $app_list_strings, $beanFiles;
        
        $error = new SoapError();
        
        if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', '', '', '', $error)) {
            $error->set_error('invalid_session');
            self::$helperObject->setFaultObject($error);
            return false;
        }
        
        $time_start = microtime(true);
        
        $dispositif = false;
        $campagne = false;
        $reunion = false;
        $commission = false;
        $representant_legal = false;

        $champs_additionnel = array(
            'dispositif_code' => "",
            'campagne_millesime' => "",
            'reunion_type' => "",
            'reunion_date' => "",
            'commission_libelle_long' => "",
            'demandeur_representant_legal_nom' => "",
            'demandeur_representant_legal_prenom' => "",
        );
        

        $array_retour = $this->get_entry($session, "OPS_dossier", "id", $id_dossier);
        $array_retour = array_merge( $array_retour, $champs_additionnel );

        if(trim($array_retour['type_tiers']) == "Individu"){
            $obj_dossier = new OPS_dossier();
            $obj_dossier = $obj_dossier->retrieve($array_retour['id']);

            $demandeurs = $obj_dossier->get_linked_beans("ops_individu_ops_dossier","OPS_individu");
            $array_retour['demandeur_id'] = $demandeurs[0]->id;
            
        } 
        elseif( trim($array_retour['type_tiers']) =="Personne Morale"){
            $obj_dossier = new OPS_dossier();
            $obj_dossier = $obj_dossier->retrieve($array_retour['id']);

            $demandeurs = $obj_dossier->get_linked_beans("ops_personne_morale_ops_dossier","OPS_personne_morale");
            $array_retour['demandeur_id'] = $demandeurs[0]->id;
            
            
            // Récupération du Code dispositif
            $dispositif = $this->get_dispositif_by_dossier( $obj_dossier );
            if($dispositif !== false){
                $array_retour['dispositif_code'] = trim($dispositif['cle']);
            }

            // Récupération du Millésime campagne
            $campagne = $this->get_campagne_by_dossier( $obj_dossier );
            if($campagne !== false){
                $array_retour['campagne_millesime'] = trim($campagne['millesime']);
            }

            // Récupération du Type de la réunion et Date de réunion
            $reunion = $this->get_reunion_by_dossier( $obj_dossier );
            if($reunion !== false){
                $array_retour['reunion_type'] = trim($reunion['type_reunion']);
                $array_retour['reunion_date'] = trim($reunion['date_reunion']);
            }

            // Récupération du Libellé long commission
            $commission = $this->get_commission_by_dossier( $obj_dossier );
            if($reunion !== false){
                $array_retour['commission_libelle_long'] = $commission['libelle_long'];
            }
            
            // Récupération du Nom et Prénom du représentant légal de la personne morale bénéficiaire
            if(is_array($demandeurs) && count($demandeurs) == 1){
                $obj_personne_morale = new OPS_personne_morale;
                $obj_personne_morale->retrieve($demandeurs[0]->id);
                if(isset($obj_personne_morale->ops_individu_id) && !empty($obj_personne_morale->ops_individu_id)){
                    $representant_legal = $this->get_individu_by_id($obj_personne_morale->ops_individu_id);
                    if($representant_legal !== false){
                        $array_retour['demandeur_representant_legal_nom'] = trim($representant_legal['first_name']);
                        $array_retour['demandeur_representant_legal_prenom'] = trim($representant_legal['last_name']);
                    }
                }
            }
            
        }
       
        $utils        = new ODEServiceUtils();
        $tab = $utils->formater_html( $array_retour );

        $time_traitement = microtime(true) - $time_start;
        $GLOBALS['log']->fatal('GET dossier by id in '.$time_traitement.' secondes ');
        return $tab;
        
    }
    
    /**
     * get_dossier_by_demandeur
     *
     *
     * @param String $session     -- ID de la session
     * @param String $type_tiers  -- Type tiers du demandeur
     * @param String $demandeur   -- ID demandeur
     * 
     * @return Array 'Liste Dossiers' -- Array 
     * 
     */
    function get_list_dossier_by_demandeur($session, $type_tiers, $demandeur)
    {
        global $app_list_strings;
        
        $error = new SoapError();
        $array_retour;
        $app_list_strings = return_app_list_strings_language('fr_FR');
        
        if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', '', '', '', $error)) {
            $error->set_error('invalid_session');
            self::$helperObject->setFaultObject($error);
            return false;
        }
        
        $dispositif = false;
        $campagne = false;
        $reunion = false;
        $commission = false;
        $representant_legal = false;

        $champs_additionnel = array(
            'dispositif_code' => "",
            'campagne_millesime' => "",
            'reunion_type' => "",
            'reunion_date' => "",
            'commission_libelle_long' => "",
            'demandeur_representant_legal_nom' => "",
            'demandeur_representant_legal_prenom' => "",
        );
        if (empty($type_tiers)) {
            
            // ERREUR : parametre invalide
            $error->set_error('invalid_parameters');
            self::$helperObject->setFaultObject($error);
            return false;
            
            
        } elseif ($type_tiers == "Individu") {
            
            
            $obj_individu = new OPS_individu();
            $obj_individu->retrieve($demandeur);
            
            if (!empty($obj_individu->id)) {
                
                $tab_dossiers = $obj_individu->get_linked_beans('ops_individu_ops_dossier', 'OPS_dossier', '', '', '', '0', '');
                
                if (count($tab_dossiers) > 0) {
                    
                    foreach ($tab_dossiers as $key => $un_dossier) {
                        
                        $array_dossier = $this->get_entry($session, "OPS_dossier", "id", $un_dossier->id);

                        $utils        = new ODEServiceUtils();
                        $tab = $utils->formater_html( $array_dossier );
                            
                        $array_retour[] = $tab ; 
                        
                    }
                    
                } else {
                    
                    $error->set_error('dossier_null');
                    self::$helperObject->setFaultObject($error);
                    return false;
                    
                }
                
            } else {
                
                $error->set_error('demandeur_inconnu');
                self::$helperObject->setFaultObject($error);
                return false;
            }
            
            
        } elseif ($type_tiers == "Personne Morale") {
            
            if (array_key_exists('OPS_personne_morale', $app_list_strings['moduleList'])) {
                
                $obj_personne_morale = new OPS_personne_morale();
                $obj_personne_morale->retrieve($demandeur);
                
                if (!empty($obj_personne_morale->id)) {
                    
                    $tab_dossiers = $obj_personne_morale->get_linked_beans('ops_personne_morale_ops_dossier', 'OPS_dossier', '', '', '', '0', '');
                    
                    if (count($tab_dossiers) > 0) {
                        
                        foreach ($tab_dossiers as $key => $un_dossier) {
                            
                            $array_dossier = $this->get_entry($session, "OPS_dossier", "id", $un_dossier->id);

                            $utils        = new ODEServiceUtils();
                            $tab = $utils->formater_html( $array_dossier );

                            $tab = array_merge( $tab, $champs_additionnel );

                            // Récupération du Code dispositif
                            $dispositif = $this->get_dispositif_by_dossier( $un_dossier );
                            if($dispositif !== false){
                                $tab['dispositif_code'] = trim($dispositif['cle']);
                            }

                            // Récupération du Millésime campagne
                            $campagne = $this->get_campagne_by_dossier( $un_dossier );
                            if($campagne !== false){
                                $tab['campagne_millesime'] = trim($campagne['millesime']);
                            }

                            // Récupération du Type de la réunion et Date de réunion
                            $reunion = $this->get_reunion_by_dossier( $un_dossier );
                            if($reunion !== false){
                                $tab['reunion_type'] = trim($reunion['type_reunion']);
                                $tab['reunion_date'] = trim($reunion['date_reunion']);
                            }

                            // Récupération du Libellé long commission
                            $commission = $this->get_commission_by_dossier( $un_dossier );
                            if($reunion !== false){
                                $tab['commission_libelle_long'] = $commission['libelle_long'];
                            }

                            // Récupération du Nom et Prénom du représentant légal de la personne morale bénéficiaire
    
                            if(isset($obj_personne_morale->ops_individu_id) && !empty($obj_personne_morale->ops_individu_id)){
                                $representant_legal = $this->get_individu_by_id($obj_personne_morale->ops_individu_id);
                                if($representant_legal !== false){
                                    $tab['demandeur_representant_legal_nom'] = trim($representant_legal['first_name']);
                                    $tab['demandeur_representant_legal_prenom'] = trim($representant_legal['last_name']);
                                }
                            }
                            

                            $array_retour[] = $tab ; 
                            
                        }
                        
                    } else {
                        
                        $error->set_error('dossier_null');
                        self::$helperObject->setFaultObject($error);
                        return false;
                        
                    }
                    
                } else {
                    
                    $error->set_error('demandeur_inconnu');
                    self::$helperObject->setFaultObject($error);
                    return false;
                }
                
            } else {
                
                $error->set_error('module_inconnu');
                self::$helperObject->setFaultObject($error);
                return false;
                
            }
        } else {
            
            $error->set_error('type_tiers_inconnu');
            self::$helperObject->setFaultObject($error);
            return false;
        }
        
        return $array_retour;
    }
    
    /**
     * get_entry
     *
     *
     * @param String $session     -- ID de la session
     * @param String $module      -- Module de l'enregistrement
     * @param String $champ       -- Champ à rechercher
     * @param String $valeur      -- Valeur à chercher
     * 
     * @return Array 'enregistrement' -- Array 
     * 
     */
    function get_entry($session, $module, $champ, $valeur)
    {
        global $beanFiles, $sugar_config;
        
        $error        = new SoapError();
        $utils        = new ODEServiceUtils();
        $return_array = array();
        
        if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', '', '', '', $error)) {
            $error->set_error('invalid_session');
            self::$helperObject->setFaultObject($error);
            return false;
        }
        
        if (empty($valeur)) {
            
            // ERREUR : parametre invalide
            $error->set_error('invalid_parameters');
            self::$helperObject->setFaultObject($error);
            return false;
            
        } else {
            
            
            require_once($beanFiles[$module]);
            $obj_module = new $module();
            $un_module  = $obj_module->retrieve_by_string_fields(array(
                $champ => $valeur
            ));
            
            if (!empty($un_module->id)) {
                
                
                $list_module = self::get_entries($session, $module, array(
                    $un_module->id
                ), "", "", "");
                
                if (count($list_module['entry_list']) > 0) {
                    
                    
                    foreach ($list_module['entry_list'] as $key => $un_enreg) {
                        
                        foreach ($un_enreg['name_value_list'] as $cle => $value) {
                            
                            $return_array[$value['name']] = $value['value'];
                            
                        }
                    }
                    
                    return $return_array;
                }
                
            } else {
                
                // ERREUR : enregistrement invalide
                $error->set_error('invalid_enregistrement');
                self::$helperObject->setFaultObject($error);
                return false;
                
            }
        }
    }
    
    
    /**
     * Mise à jour de l'objet courant 
     *
     *
     * @param String $session          -- ID de la session
     * @param String $module_name      -- Module de l'enregistrement
     * @param String $name_value_list  -- Champ à mettre à jour
     * @param Bool $track_view         -- Should the tracker be notified that the action was performed on the bean.
     *
     * @return Array    'id'           -- the ID of the bean that was written to (-1 on error)
     * @exception 'SoapFault'          -- The SOAP error, if any
     */
    function set_entry($session, $module_name, $name_value_list, $track_view = FALSE)
    {
        global $beanList, $beanFiles, $current_user;
        
        if (self::$helperObject->isLogLevelDebug()) {
            $GLOBALS['log']->debug('SoapHelperWebServices->set_entry - input data is ' . var_export($name_value_list, true));
        } // if
        $error = new SoapError();
        if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', $module_name, 'write', 'no_access', $error)) {
            $GLOBALS['log']->info('End: SugarWebServiceImpl->set_entry');
            return;
        } // if
        $class_name = $beanList[$module_name];
        require_once($beanFiles[$class_name]);
        $seed = new $class_name();
        foreach ($name_value_list as $name => $value) {
            if (is_array($value) && $value['name'] == 'id') {
                $seed->retrieve($value['value']);
                break;
            } else if ($name === 'id') {
                
                $seed->retrieve($value);
            }
        }
        
        $return_fields = array();
        foreach ($name_value_list as $name => $value) {
            if ($module_name == 'Users' && !empty($seed->id) && ($seed->id != $current_user->id) && $name == 'user_hash') {
                continue;
            }
            if (!empty($seed->field_name_map[$name]['sensitive'])) {
                continue;
            }
            
            if (!is_array($value)) {
                $seed->$name     = $value;
                $return_fields[] = $name;
            } else {
                $seed->{$value['name']} = $value['value'];
                $return_fields[]        = $value['name'];
            }
        }
        if (!self::$helperObject->checkACLAccess($seed, 'Save', $error, 'no_access') || ($seed->deleted == 1 && !self::$helperObject->checkACLAccess($seed, 'Delete', $error, 'no_access'))) {
            $GLOBALS['log']->info('End: SugarWebServiceImpl->set_entry');
            return;
        } // if
        
        $seed->save(self::$helperObject->checkSaveOnNotify());
        
        $return_entry_list = self::$helperObject->get_name_value_list_for_fields($seed, $return_fields);
        
        if ($seed->deleted == 1) {
            $seed->mark_deleted($seed->id);
        }
        
        if ($track_view) {
            self::$helperObject->trackView($seed, 'editview');
        }
        
        $GLOBALS['log']->info('End: SugarWebServiceImpl->set_entry');
        return array(
            'id' => $seed->id,
            'entry_list' => $return_entry_list
        );
    } // fn
    


    /**
     * @access private
     * verifie_boolean()
     * Fonction qui :
     *    - retourne 1 si $bool == '1' ou $bool == 1 ou $bool == 'true'
     *    - retourne 0 sinon 
     *
     *
     * @param integer|boolean           $bool    
     * 
     * @return integer 0 ou 1
     * 
     */
    private function verifie_boolean($bool){

        $bool_verified = 0;

        if ( is_string($bool) && trim($bool) === '1' ) {
            if( trim($bool) === '1' || strcasecmp($bool,'true') == 0){
                $bool_verified = 1;
            }
        } elseif ( is_int($bool) && $bool === 1 ) {
            $bool_verified = 1;
        }

        return $bool_verified;

    }

    /**
     * @access private
     * get_dispositif_by_dossier()
     * Fonction qui 
     *
     *
     * @param Bean           $dossier  : Objet SuiteCRM , Module OPS_dossier     
     * 
     * @return array|boolean 
     * 
     */
    private function get_dispositif_by_dossier($dossier = false){

        $dispositif = false;
        if(isset($dossier->id) && !empty($dossier->id)){
            $dispositifs = $dossier->get_linked_beans("ops_dispositif_ops_dossier","OPS_dispositif");
            if(is_array($dispositifs) && count($dispositifs) == 1){
                $dispositif = array(
                    "id" => $dispositifs[0]->id,
                    "name" => $dispositifs[0]->name,
                    "date_entered" => $dispositifs[0]->date_entered,
                    "date_modified" => $dispositifs[0]->date_modified,
                    "modified_user_id" => $dispositifs[0]->modified_user_id,
                    "created_by" => $dispositifs[0]->created_by,
                    "description" => $dispositifs[0]->description,
                    "assigned_user_id" => $dispositifs[0]->assigned_user_id,
                    "attribution_auto" => $dispositifs[0]->attribution_auto,
                    "cle" => $dispositifs[0]->cle,
                    "type_depense" => $dispositifs[0]->type_depense,
                    "thematique" => $dispositifs[0]->thematique,
                    "debut_realisation" => $dispositifs[0]->debut_realisation,
                    "fin_realisation" => $dispositifs[0]->fin_realisation,
                    "debut_caducite" => $dispositifs[0]->debut_caducite,
                    "fin_caducite" => $dispositifs[0]->fin_caducite,
                    "ops_exercice_id" => $dispositifs[0]->ops_exercice_id
                );
            }
        }
        return $dispositif;

    }

    /**
     * @access private
     * get_campagne_by_dossier()
     * Fonction qui 
     *
     *
     * @param Bean           $dossier  : Objet SuiteCRM , Module OPS_dossier  
     * 
     * @return array|boolean 
     * 
     */
    private function get_campagne_by_dossier($dossier = false){


        $campagne = false;
        if(isset($dossier->id) && !empty($dossier->id)){
            $campagnes = $dossier->get_linked_beans("ops_campagne_ops_dossier","OPS_campagne");
            if(is_array($campagnes) && count($campagnes) == 1){
                $campagne = array(
                    "id" => $campagnes[0]->id,
                    "name" => $campagnes[0]->name,
                    "date_entered" => $campagnes[0]->date_entered,
                    "date_modified" => $campagnes[0]->date_modified,
                    "modified_user_id" => $campagnes[0]->modified_user_id,
                    "created_by" => $campagnes[0]->created_by,
                    "description" => $campagnes[0]->description,
                    "assigned_user_id" => $campagnes[0]->assigned_user_id,
                    "millesime" => $campagnes[0]->millesime,
                    "date_debut" => $campagnes[0]->date_debut,
                    "date_fin" => $campagnes[0]->date_fin,
                );
            }
        }
        return $campagne;

    }

    /**
     * @access private
     * get_reunion_by_dossier()
     * Fonction qui 
     *
     *
     * @param Bean           $dossier  : Objet SuiteCRM , Module OPS_dossier    
     * 
     * @return array|boolean 
     * 
     */
    private function get_reunion_by_dossier($dossier = false){

        $reunion = false;
        $tab_reunion = array();
        if(isset($dossier->id) && !empty($dossier->id)){
            $reunions = $dossier->get_linked_beans("ops_reunion_ops_dossier","OPS_reunion");
            if(is_array($reunions) && count($reunions) > 0){
                foreach ($reunions as $key => $reun) {
                    $tab_reunion[$key] = array(
                        "id" => $reun->id,
                        "name" => $reun->name,
                        "date_entered" => $reun->date_entered,
                        "date_modified" => $reun->date_modified,
                        "modified_user_id" => $reun->modified_user_id,
                        "created_by" => $reun->created_by,
                        "description" => $reun->description,
                        "assigned_user_id" => $reun->assigned_user_id,
                        "date_reunion" => $reun->date_reunion,
                        "type_reunion" => $reun->type_reunion,
                    );
                }
                if(count($tab_reunion) > 0){
                    $reunion = $tab_reunion;
                }
            }
        }
        return $reunion;

    }

    /**
     * @access private
     * get_commission_by_dossier()
     * Fonction qui 
     *
     *
     * @param Bean           $dossier  : Objet SuiteCRM , Module OPS_dossier  
     * 
     * @return array|boolean 
     * 
     */	
    private function get_commission_by_dossier($dossier = false){

        $commission = false;
        $tab_commission = array();
        if(isset($dossier->id) && !empty($dossier->id)){
            $commissions = $dossier->get_linked_beans("ops_commission_ops_dossier","OPS_commission");
            if(is_array($commissions) && count($commissions) > 0){
                foreach ($commissions as $key => $com) {
                    $tab_commission[$key] = array(
                        "id" => $com->id,
                        "name" => $com->name,
                        "date_entered" => $com->date_entered,
                        "date_modified" => $com->date_modified,
                        "modified_user_id" => $com->modified_user_id,
                        "created_by" => $com->created_by,
                        "description" => $com->description,
                        "assigned_user_id" => $com->assigned_user_id,
                        "libelle_court" => $com->libelle_court,
                        "libelle_long" => $com->libelle_long,
                        "statut_commission" => $com->statut_commission,
                    );
                }
                if(count($tab_commission) > 0){
                    $commission = $tab_commission;
                }
            }
        }
        return $commission;

    }

    /**
     * @access private
     * get_individu_by_id()
     * Fonction qui 
     *
     *
     * @param string            $id   : l'id de l'individu recherché
     * 
     * @return array|boolean 
     * 
     */
    private function get_individu_by_id($id = false){

        $individu = false;
        if(is_string($id) && !empty($id)){
            $obj_individu = new OPS_individu;
            $obj_individu->retrieve($id);
            if(isset($obj_individu->id) && !empty($obj_individu->id)){
                $individu = array(
                    "id" => $obj_individu->id,
                    "name" => $obj_individu->name,
                    "date_entered" => $obj_individu->date_entered,
                    "date_modified" => $obj_individu->date_modified,
                    "modified_user_id" => $obj_individu->modified_user_id,
                    "created_by" => $obj_individu->created_by,
                    "description" => $obj_individu->description,
                    "assigned_user_id" => $obj_individu->assigned_user_id,
                    "salutation" => $obj_individu->salutation,
                    "first_name" => $obj_individu->first_name,
                    "last_name" => $obj_individu->last_name,
                );
            }
        }
        return $individu;

    }
    
}
