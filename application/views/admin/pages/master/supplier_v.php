<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- Invoice archive -->
        <div class="card">
            <div class="card-header bg-transparent header-elements-inline">
                <!-- <h6 class="card-title">Invoice archive</h6> -->
                <button type="button" class="btn bg-teal" data-toggle="modal" data-target="#modal_form_add"><i class="icon-add-to-list"></i> &nbsp; Add New Supplier</button>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <table class="table table-lg table-supplier">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Period</th>
                        <th>Supplier Name</th>
                        <th>E-Mail</th>
                        <th>Phone Number</th>
                        <th>TOP</th>
                        <th>Address</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody id="table-body-supplier">

                </tbody>
            </table>
        </div>
        <!-- /invoice archive -->
    </div>
</div>

<!-- Modal Add -->
<div id="modal_form_add" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Input</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="#" class="form-horizontal" name="add-supplier" id="add-supplier">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Supplier Name</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" class="form-control" name="vendor_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">PIC</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="PIC" class="form-control" name="vendor_pic_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">E-Mail</label>
                        <div class="col-sm-9">
                            <input type="email" placeholder="E-Mail Address" class="form-control" name="vendor_pic_email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Phone Number</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="Price" class="form-control" name="vendor_phone_number">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">TOP</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" name="vendor_top" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Description</label>
                        <div class="col-sm-9">
                            <textarea rows="3" cols="3" class="form-control" placeholder="You don't have to fill" name="vendor_address"></textarea>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn bg-primary">Submit form</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Add -->

<!-- Modal Edit -->
<div id="modal_form_edit" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Edit</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="#" class="form-horizontal" name="edit-supplier" id="edit-supplier">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Supplier Name</label>
                        <div class="col-sm-9">
                            <input type="hidden" placeholder="" class="form-control" name="vendor_id" id="vendor_id">
                            <input type="text" placeholder="" class="form-control" name="vendor_name" id="vendor_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">PIC</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="PIC" class="form-control" name="vendor_pic_name" id="vendor_pic_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">E-Mail</label>
                        <div class="col-sm-9">
                            <input type="email" placeholder="E-Mail Address" class="form-control" name="vendor_pic_email" id="vendor_pic_email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Phone Number</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="Price" class="form-control" name="vendor_phone_number" id="vendor_phone_number">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">TOP</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" name="vendor_top" id="vendor_top" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Description</label>
                        <div class="col-sm-9">
                            <textarea rows="3" cols="3" class="form-control" placeholder="You don't have to fill" name="vendor_address" id="vendor_address"></textarea>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn bg-primary">Submit form</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Edit -->