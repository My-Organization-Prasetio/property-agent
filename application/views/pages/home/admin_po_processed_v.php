<div class="row">
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <!-- Invoice archive -->
        <div class="card">
            <div class="card-header bg-transparent header-elements-inline">
                <h6 class="card-title">Purchase Order List</h6>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <table class="table table-lg invoice-archive">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Period</th>
                        <th>Request Number</th>
                        <th>Status</th>
                        <th>TOP</th>
                        <th>Response</th>
                        <th>Grand Total</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>3</td>
                        <td>February 2015</td>
                        <td>
                            <h6 class="mb-0">
                                <a href="#">REQ2110BK001</a>
                                <span class="d-block font-size-sm text-muted">Request By: Admin</span>
                            </h6>
                        </td>
                        <td>
                            <select name="status" class="form-control form-control-select2" data-placeholder="Select status">
                                <option value="overdue" selected>Approve</option>
                                <option value="overdue">Overdue</option>
                                <option value="hold">On hold</option>
                                <option value="pending">Pending</option>
                                <option value="paid">Paid</option>
                                <option value="invalid">Invalid</option>
                                <option value="cancel">Canceled</option>
                            </select>
                        </td>
                        <td>
                            30 Day From Purhcase Order
                        </td>
                        <td>
                            <span class="badge badge-success">Approve On 16, 2015</span>
                        </td>
                        <td>
                            <span class="d-block font-size-sm text-muted">Rp_ 250.000,00</span>
                        </td>
                        <td class="text-center">
                            <div class="list-icons list-icons-extended">
                                <div class="list-icons-item dropdown">
                                    <a href="<?= base_url() ?>admin/purchase-order-detail/REQ2110BK001" class="list-icons-item"><i class="icon-file-eye"></i></a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>March 2015</td>
                        <td>
                            <h6 class="mb-0">
                                <a href="#">REQ2110BK001</a>
                                <span class="d-block font-size-sm text-muted">Request By: Admin</span>
                            </h6>
                        </td>
                        <td>
                            <select name="status" class="form-control form-control-select2" data-placeholder="Select status">
                                <option value="overdue" selected>Approve</option>
                                <option value="overdue">Overdue</option>
                                <option value="hold">On hold</option>
                                <option value="pending">Pending</option>
                                <option value="paid">Paid</option>
                                <option value="invalid">Invalid</option>
                                <option value="cancel">Canceled</option>
                            </select>
                        </td>
                        <td>
                        30 Day From Purhcase Order
                        </td>
                        <td>
                            <span class="badge badge-success">Approve On 16, 2015</span>
                        </td>
                        <td>
                            <span class="d-block font-size-sm text-muted">Rp_ 250.000,00</span>
                        </td>
                        <td class="text-center">
                            <div class="list-icons list-icons-extended">
                                <div class="list-icons-item dropdown">
                                    <a href="#" class="list-icons-item"><i class="icon-file-eye"></i></a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /invoice archive -->
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <div class="card">
            <div class="card-header bg-transparent header-elements-inline">
                <h6 class="card-title">Status Checked</h6>
            </div>
            <div class="card-body">
                <form action="#">
                    <div class="form-group">
                        <label>Request Number</label>
                        <input type="text" class="form-control" placeholder="Input QTY">
                    </div>

                    <div class="form-group">
                        <label>Request Status:</label>
                        <textarea rows="3" cols="3" class="form-control" placeholder="You don't have to fill">On Check and Need Aproval</textarea>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-info btn-block"><i class="icon-folder-search"> Search </i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>