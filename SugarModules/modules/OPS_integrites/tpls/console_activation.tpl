<!--
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
-->

<link rel="stylesheet" type="text/css" href="modules/OPS_integrites/css/style.css">
<script type="text/javascript" src="modules/OPS_integrites/js/check_checkbox.js"></script>
<h1 class="title-module"> {$MOD.LBL_TITLE_CONSOLE} </h1>
<br />

<form method="POST" action="index.php?module=OPS_integrites&action=console">
    
    <input id="button-launch" type="submit" style="visibility: hidden;" name="launch_query" value="{$MOD.LBL_BUTTON_LANCER}" />
    <input id="button-launch" type="submit" name="save_query" value="{$MOD.LBL_BUTTON_SAVE}" />

    <table cellpadding='0' cellspacing='0' width='80%' border='0' class="view ">
        {assign var='num_ligne' value=0}
        {foreach name=rowIteration from=$LISTE_INTEGRITES key=integrites_id item=integrites}
            {assign var='num_ligne' value=$num_ligne+1}    
            {if $smarty.foreach.rowIteration.iteration is odd}
                {assign var='_rowColor' value=$rowColor[0]}
            {else}
                {assign var='_rowColor' value=$rowColor[1]}
            {/if}
        {if $num_ligne % 2 == 0}
        <tr class='{$_rowColor}S1 pair' scope='col'>
        {else}
         <tr class='{$_rowColor}S1' scope='col'>
        {/if}
            <td width="90%">
                <button type="button" title="Afficher les requêtes associées" class="button firstChild" value="Affiche Requête" onclick="afficherLesValeursDesRequetes({$integrites_id})">
                    <img height="30%" src="modules/OPS_integrites/images/add.png" id="bouton_show{$integrites_id}">
                </button>
                
                <strong class="integrites-name">{$integrites->name}</strong>
                
                <!--<input type=hidden name='requete[{$num_ligne}]' value='{$requete->name}'>-->
            
                <div style="display: none;" id="valeurRequete{$integrites_id}">

                    {foreach from=$integrites->requetes key=requete_id item=requete}
                        <div class="une-requete">
                            <div class="bloc">
                                <div class="bloc1">
                                    {$requete->name}
                                </div>
                                <div class="bloc2">
                                    {if $requete->actif == 1}
                                        <input style="visibility: hidden;" class='requete_checkbox{$integrites_id}' name='requete_checkbox{$requete->id}' type='checkbox' value='1' checked='checked'>
                                        <script type="text/javascript"> counter++; $("#button-launch").css("visibility", "visible");</script>
                                    {else}
                                        <input style="visibility: hidden;" class='requete_checkbox{$integrites_id}' name='requete_checkbox{$requete->id}' type='checkbox' value='1'>
                                    {/if}
                                </div>
                            </div>
                        </div>
                    {/foreach}
                </div>
            </td>
        </tr>
        {/foreach}
    </table>

    <!-- onclick="document.SaveConsole.submit();" /> -->
</form>