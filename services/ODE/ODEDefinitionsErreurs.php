<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

// ERREUR 
$error_defs['invalid_parameters']     	= array('number'=>5000 , 'name'=>'Paramètres Invalides', 'description'=>'Les paramètres envoyés sont incorrects') ;
$error_defs['invalid_enregistrement']   = array('number'=>5001 , 'name'=>'Enregistrement inexistant', 'description'=>'L\'enregistrement n\'existe pas, il a peut-être été supprimé') ;
$error_defs['demandeur_inconnu']     	= array('number'=>5002 , 'name'=>'Demandeur inconnu', 'description'=>'Le demandeur n\'existe pas ou a été supprimé') ;
$error_defs['module_inconnu']     		= array('number'=>5003 , 'name'=>'Module inconnu', 'description'=>'Vérifier que le module soit bien installé sur l\'environnement') ;
$error_defs['type_tiers_inconnu']     	= array('number'=>5004 , 'name'=>'Type tiers inconnu', 'description'=>'Type tiers incoonu ou supprimé') ;
$error_defs['objet_inconnu']     		= array('number'=>5005 , 'name'=>'Objet inconnu', 'description'=>'Objet inconnu ou supprimé') ;
$error_defs['statut_inconnu']     		= array('number'=>5006 , 'name'=>'Statut inconnu', 'description'=>'Statut inconnu ou supprimé') ;
$error_defs['personne_morale_inconnu']	= array('number'=>5007 , 'name'=>'Personne morale inconnu', 'description'=>'Personne morale inconnu ou supprimé') ;
$error_defs['individu_inconnu']         = array('number'=>5008 , 'name'=>'Individu inconnu', 'description'=>'Individu inconnu ou supprimé') ;
$error_defs['invalid_session']     		= array('number'=>5009 , 'name'=>'Session Invalide', 'description'=>'La session envoyé est périmée ou invalide') ;

// NULL 
$error_defs['document_null']     		= array('number'=>2001 , 'name'=>'Aucun document', 'description'=>'Aucun document lié à cet objet') ;
$error_defs['dossier_null']     		= array('number'=>2002 , 'name'=>'Aucun dossier', 'description'=>'Aucun dossier lié à ce demandeur') ;
