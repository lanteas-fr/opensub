<!--
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
-->

<link rel="stylesheet" type="text/css" href="modules/OPS_integrites/css/style.css">
<script type="text/javascript" src="modules/OPS_integrites/js/check_checkbox.js"></script>
<h1 class="title-module"> {$MOD.LBL_RESULT_CONSOLE} </h1>
<br />

    <table cellpadding='0' cellspacing='0' width='80%' border='0' class="view">
        
        {assign var='num_ligne' value=0}
        {foreach from=$LISTE_INTEGRITES key=integrite_id item=integrite}
        {assign var='num_ligne' value=$num_ligne+1}
        {if $num_ligne % 2 == 0}
        <tr class='{$_rowColor}S1 resultat pair' scope='col'>
        {else}
         <tr class='{$_rowColor}S1 resultat' scope='col'>
        {/if}
            <td id="affichage-resultat-req">
                <button type="button" title="Afficher les requêtes associées" class="button firstChild" value="Affiche Requête" onclick="afficherLesValeursDesRequetes({$integrite_id})">
                    <img height="30%" src="modules/OPS_integrites/images/add.png" id="bouton_show{$integrite_id}">
                </button>
                
                <strong class="integrites-name">
                    {$integrite->name} : 
                    {if $integrite->nb_fatal > 0}
                        <span class="fatal">{$integrite->nb_fatal} erreur(s)</span>
                    {/if}
                    {if $integrite->nb_warning > 0}
                        <span class="warning">{$integrite->nb_warning} attention(s)</span>
                    {/if}
                    {if $integrite->nb_ok > 0}
                        <span class="ok">{$integrite->nb_warning} OK</span>
                    {/if}
                    {if $integrite->nb_warning == 0 and $integrite->nb_ok == 0 and $integrite->nb_fatal == 0}
                        <span class="ok">OK</span>
                    {/if}
                </strong>
                
                <div style="display: none;" id="valeurRequete{$integrite_id}">
                    {assign var='numero_de_ligne' value=0}
                    {assign var='conseil_id' value=0}
                    {foreach from=$integrite->requetes key=requete_id item=requete}
                        <div class="une-requete">
                            <div class="bloc">
                                <div class="bloc1">
                                    {if $requete->total >= 1}
                                        <button type="button" title="Afficher les requêtes associées" class="button-req firstChild" value="Affiche Requête" onclick="afficherLesValeursDesRequetesApresLancement({$integrite_id}, {$requete_id}, {$conseil_id})">
                                            <img height="30%" src="modules/OPS_integrites/images/add.png" class="bouton_show_req" id="bouton_show_req{$integrite_id}{$requete_id}">
                                        </button>
                                        {$requete->name}
                                    {else}
                                        <p class="requete-sans-resultat">{$requete->name}</p>
                                    {/if}
                                </div>
                                <div class="bloc2">
                                    {if $requete->total == 0}
                                        <span class="ok">OK </span>
                                    {else}
                                        {if $requete->nivlog == 1}
                                            <span class="ok">OK ({$requete->total})</span>
                                        {elseif $requete->nivlog == 2}
                                            <span class="warning">ATTENTION ({$requete->total})</span>
                                        {elseif $requete->nivlog == 3}
                                            <span class="fatal">ERREUR ({$requete->total})</span>
                                        {/if}
                                    {/if}                                        
                                </div>
                            </div>
                            
                            {if $requete->nivlog != 1 AND $requete->total >= 1}
                            <div id="conseil-requete{$conseil_id}{$integrite_id}{$requete_id}" class="conseil" style="display: none;">
                                <div class="conseil-line">
                                    <div class="titre-conseil" style="margin-left: 5%;">Conseil : </div>
                                    <div class="contenu-conseil">{$requete->conseil}</div>
                                </div>
                            </div>
                            {assign var='conseil_id' value=$conseil_id+1}
                            {/if}
                        </div>
                        {if $requete->total >= 1}
                        <div id="resultat-requete{$integrite_id}{$requete_id}" class="tableau-resultat" style="display: none;">
                            
                            {foreach from=$requete->liste_valeurs key=valeurs_id item=valeurs}
                                {foreach from=$valeurs key=valeur_id item=valeur}
                                    <div style="margin-left: 8%;">
                                        {$valeur}
                                    </div>
                                    {assign var='id_conseil' value=$id_conseil+1}
                                {/foreach}
                            {/foreach}
                        </div>
                        {/if}
                    {/foreach}
                </div>
            </td>
            {if $num_ligne == 1}   
                <script type="text/javascript">afficherLesValeursDesRequetes({$integrite_id})</script>
            {/if}
        </tr>
        {/foreach}
    </table>