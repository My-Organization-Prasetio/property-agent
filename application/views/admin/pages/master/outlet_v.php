<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- Invoice archive -->
        <div class="card">
            <div class="card-header bg-transparent header-elements-inline">
                <!-- <h6 class="card-title">Invoice archive</h6> -->
                <button type="button" class="btn bg-teal" data-toggle="modal" data-target="#modal_form_add"><i class="icon-add-to-list"></i> &nbsp; Add New Outlet</button>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <table class="table table-lg table-outlet">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>City</th>
                        <th>Outlet Name</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>SPV Name</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody id="table-body-outlet">

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

            <form action="#" class="form-horizontal" name="add-outlet" id="add-outlet">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Oulet Name</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="Outlet Name" class="form-control" name="branch_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Supervisor</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="Supervisor Name" class="form-control" name="branch_spv">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Phone Number</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="ex: 085711111111" class="form-control" name="branch_phone_number">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Address</label>
                        <div class="col-sm-9">
                            <textarea rows="3" cols="3" class="form-control" placeholder="You don't have to fill" name="branch_address"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">City</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" class="form-control" name="branch_city">
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

            <form action="#" class="form-horizontal" name="edit-outlet" id="edit-outlet">
                <div class="modal-body">
                <div class="form-group row">
                        <label class="col-form-label col-sm-3">Oulet Name</label>
                        <div class="col-sm-9">
                            <input type="hidden" placeholder="Outlet Name" class="form-control" name="branch_id" id="branch_id">
                            <input type="text" placeholder="Outlet Name" class="form-control" name="branch_name" id="branch_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Supervisor</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="Supervisor Name" class="form-control" name="branch_spv" id="branch_spv">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Phone Number</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="ex: 085711111111" class="form-control" name="branch_phone_number" id="branch_phone_number">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Address</label>
                        <div class="col-sm-9">
                            <textarea rows="3" cols="3" class="form-control" placeholder="You don't have to fill" name="branch_address" id="branch_address"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">City</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" class="form-control" name="branch_city" id="branch_city">
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