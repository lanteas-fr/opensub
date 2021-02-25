<!--
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
-->

<br />
<div class="panel panel-default">
    <div class="panel-heading ">
        <a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
            <div class="col-xs-10 col-sm-11 col-md-11">{$MOD.LBL_CONSEIL}</div>
        </a>
    </div>
    <div class="panel-body panel-collapse collapse in">
        <div class="tab-content">
            <div class="row edit-view-row">
                <div class="col-xs-12 col-sm-12 edit-view-field " type="text" field="conseil">
                    <textarea id="conseil" name="conseil" rows="6" cols="80" title="" tabindex="-1">
                        {$fields.conseil.value}
                    </textarea>
                </div>
            </div>
        </div>
    </div>
</div>

{$tiny_script}
