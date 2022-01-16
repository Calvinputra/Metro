<div class="modal modal-warning fade" tabindex="-1" id="import_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="voyager-upload"></i> Import data to
                    {{$dataType->getTranslatedAttribute('display_name_plural')}}?</h4>
            </div>
            <div class="modal-footer">
                <div style="text-align: left !important;" class="form-group col-md-12">
                    <button
                        onclick="window.open('<?= url('migrating_data_template') ?>?key=<?= password_hash('cdd3972dea65f0721ca755c772cbce0d'. Auth::user()->mygms_id,PASSWORD_DEFAULT) ?>&mygms_id={{Auth::user()->mygms_id}}');"
                        type="button" class="btn btn-success ">Download Template</button>

                </div>
                <div style="text-align: left !important;" class="form-group col-md-12">
                    <div class="separator">OR</div>
                </div>
                <form action="{{url('products/import')}}" id="delete_form" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div style="text-align: left !important;" class="form-group col-md-12">
                        <label class="control-label" for="import_file">Select File to Import</label>
                        <input required type="file" name="import_file">
                    </div>

                    <input type="submit" class="btn btn-warning pull-right delete-confirm" value="Import Data">
                </form>
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{
                    __('voyager::generic.cancel') }}</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->