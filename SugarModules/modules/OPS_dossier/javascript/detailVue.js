
/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


var DossierView = DossierView || {};

DossierView = (function($) {

    return {
        
        setClickUpdateStatutBtn: function() {
            const self = this;
            $( "#update-statut-btn" ).click(function() {
                var select_value = $("#action_id option:selected" ).val();
                if ( select_value !== undefined && select_value !== "" ){
                    var dossier_id = $( "#formDetailView").find("input[name=record]").val();
                    self.UpdateStatut( dossier_id, select_value );
                }
            }); 
        },

        UpdateStatut: function( dossier_id, statut){

            var data = this.utf8ToB64(JSON.stringify({ "dossier_id":dossier_id, "statut":statut }));
            $.ajax({
                type: "POST",
                url: "index.php?module=OPS_statut&action=updateStatut",
                data: "data=" + data
            }).done(function(dataReturned) {
                var data = JSON.parse(dataReturned);
                if ( data.statut === "ok" ){
                    document.location.reload();
                }
            });

        },

        utf8ToB64: function( string ) {
            return window.btoa(unescape(encodeURIComponent( string )));
        },

        initIntervenant: function() {

            $('#role_1').parent().parent().parent().hide();
            $('#role_2').parent().parent().parent().hide();
            $('#role_3').parent().parent().parent().hide();
            $('#role_4').parent().parent().parent().hide();
            for( var i = 3; i <=6  ; i++){
                if( document.getElementById('ops_individu'+i+'_id').innerText != ""  ){
                    var nb = i-2;
                    $( '#role_'+nb ).parent().parent().parent().show();
                }
            }
        },

        toggleSoutienElus: function() {
            ( $("#ops_elu_id").attr("data-id-value") !== "" ) ? $("#soutien_elus").prop("checked","true") : $("#soutien_elus").removeAttr("checked") ;
        },

    }

})(jQuery);


$(document).ready(function() {

    DossierView.setClickUpdateStatutBtn();
    DossierView.initIntervenant();
    DossierView.toggleSoutienElus();
   
});




