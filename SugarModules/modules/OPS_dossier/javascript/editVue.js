
/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


var nombreDepart = 0;
var nombreActuel = nombreDepart;


$(document).ready(function() {

    init_beneficiaire_info();
    bouton_ajout_intervenant();

    // Initialisation du demandeur "CONTACT" => demandeur_bis
    if( document.getElementById('ops_individu_ops_dossier_name') ){
        document.getElementById("demandeur_bis").value = document.getElementById('ops_individu_ops_dossier_name').value ; 
    }

    // Initialisation du demandeur "CONTACT" => demandeur_bis
    if( document.getElementById('ops_personne_morale_ops_dossier_name')  ){
        document.getElementById("demandeur_bis").value = document.getElementById('ops_personne_morale_ops_dossier_name').value ; 
    }

    //Initialisation de la thémtique au choix du dispositif
    YAHOO.util.Event.addListener('ops_dispositif_ops_dossier_name', 'change', function(){
         
        if( "" == document.getElementById("ops_dispositif_ops_dossier_name").value ){

            recupDispositif("") ;

        }
        else{

            var id = document.getElementById("ops_dispositif_id").value;
            recupDispositif(id) ;
            
        }
         
    });

    // Initialisation du montant propose des que la décision commission est accordée
    var selectDecision = document.getElementById('decision_commission');
    selectDecision.addEventListener("change", function() {
        if(selectDecision.value == "accord")
        {
            var montant_vote = document.getElementById('montant_propose').value ; 
            document.getElementById('montant_vote').value = montant_vote;


        }
        else{

            document.getElementById('montant_vote').value = "";

        }

        var date_commission = document.getElementById('date_commission').value;

        if( date_commission != "" ){

                document.getElementById('date_deliberation').value = date_commission;

        }
        else{
            // Initialisation de la date de décision avec la date du jour 
            var date_jour = new Date() ; 
            document.getElementById('date_deliberation').value = "" ;
        }
    });

});


function recupDispositif( id ){


        var data = 'idDispositif=' + id;
        var xhr = null;
       
        if (window.XMLHttpRequest || window.ActiveXObject) {
          
            if (window.ActiveXObject) {
             
                try {
                
                    xhr = new ActiveXObject('Msxml2.XMLHTTP');
          
                } catch(e) {
                
                    xhr = new ActiveXObject('Microsoft.XMLHTTP');
             
                }
          
            }else {
                xhr = new XMLHttpRequest(); 
            }
        } 
        else {
             
            alert('Votre navigateur ne supporte pas l objet XMLHTTPRequest.');
            return;
        }

        var url = '/index.php?entryPoint=recuperationDispositif'  ;
       
        xhr.open('POST',url,false);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');    
        xhr.onreadystatechange = recupListeThematique;
        xhr.send(data);

        function recupListeThematique(){

            var resultat = jQuery.parseJSON(xhr.responseText);

            if( resultat != 'null' ){

                document.getElementById('thematique').options.length=0;

                var keys = Object.keys(resultat);
                var x = document.getElementById('thematique'); 

                for ( var i = 0, len = keys.length; i < len ; i++ ){
                    var option = document.createElement('option');
                    option.text = resultat[keys[i]];
                    option.value = resultat[keys[i]] ; 
                    x.add(option);
                }
                document.getElementById('info_thematique').innerHTML = "" ;
                 
            }
            else{
                document.getElementById('thematique').options.length=0;
                document.getElementById('info_thematique').innerHTML = "Aucun dispositif sélectionné" ;
            }

        }

}

function supprimer_demandeur(id){

    if(id == 1){
        document.getElementById('ops_individu_ops_dossier_name').value = "";
        document.getElementById('ops_individu_id').value = "";
        document.getElementById('demandeur').innerHTML = " ";

    }else{
        document.getElementById("ops_personne_morale_id").value = "";
        document.getElementById("ops_personne_morale_ops_dossier_name").value = "";
        document.getElementById("demandeur").innerHTML = "";
    }
    
}

function init_beneficiaire_info() {

    var type_tiers = info_url('tiers') ;
    var id_tiers = info_url('id_tiers') ;
    var name = decodeURI( info_url('indi') ) ;

    if( "undefined" != type_tiers && "undefined" != id_tiers ){

        
        if( type_tiers == "individu" ) {
       
            document.getElementById("ops_individu_id").value = id_tiers;
            document.getElementById("ops_individu_ops_dossier_name").value = name ; 
            document.getElementById("demandeur_bis").value = name ; 

        }
        else if( type_tiers == "pm" ){
     
            document.getElementById("ops_personne_morale_id").value = id_tiers;
            document.getElementById("ops_personne_morale_ops_dossier_name").value = name ; 
            document.getElementById("demandeur_bis").value = name ; 
        }
    }

}
    
function info_url(param) {
    var vars = {};
    window.location.href.replace( location.hash, '' ).replace( 
        /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
        function( m, key, value ) { // callback
            vars[key] = value !== undefined ? value : '';
        }
    );

    if ( param ) {
        return vars[param] ? vars[param] : null;    
    }
    return vars;
}

function bouton_ajout_intervenant( ) {

    var deuxPoint = jQuery("#ajouter_intervenant").parent().parent().children()[0];
    deuxPoint.firstChild.textContent = "";

    if( nombreActuel == 0 ){

        jQuery('#intervenant_1').parent().parent().hide();
        jQuery('#role_1').parent().parent().hide();
        jQuery('#intervenant_2').parent().parent().hide();
        jQuery('#role_2').parent().parent().hide();
        jQuery('#intervenant_3').parent().parent().hide();
        jQuery('#role_3').parent().parent().hide();
        jQuery('#intervenant_4').parent().parent().hide();
        jQuery('#role_4').parent().parent().hide();

        for( var i = 1; i <=4  ; i++){

            if( jQuery('#intervenant_'+i).val() != ""  ){

                jQuery( '#intervenant_'+i ).parent( ).parent( ).show( );
                jQuery( '#role_'+i ).parent( ).parent( ).show( );
                ++nombreActuel;

            }

        }

    }
    else if( nombreActuel >= 1  && nombreActuel <= 4 ){

        jQuery( '#intervenant_'+nombreActuel ).parent( ).parent( ).show( );
        jQuery( '#role_'+nombreActuel ).parent( ).parent( ).show( );

    }

    ++nombreActuel
}
