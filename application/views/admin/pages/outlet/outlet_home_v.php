<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12">
        <!-- Animal Protein -->
        <div class="card">
            <div class="card-header bg-transparent header-elements-inline">
                <span class="text-uppercase font-size-sm font-weight-semibold">Animal Protein</span>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="#">
                    <div class="form-group">
                        <label>Select Item</label>
                        <select class="form-control-sm select-search" data-fouc>
                            <option value="">-- Select Material --</option>
                            <?php
                            foreach ($data['material'] as $row) {
                                if ($row['category_code'] == 'AP') {
                                    echo '<option value="' . $row['product_id'] . '">' . $row['product_name'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Quantity</label>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input type="number" class="form-control" placeholder="Input QTY">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input type="text" class="form-control" placeholder="Unit" value="KG">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Your message:</label>
                        <textarea rows="3" cols="3" class="form-control" placeholder="You don't have to fill"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-info btn-block"><i class="icon-cart-add"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /Animal Protein -->
        <!-- Fruits & Vegetables -->
        <div class="card card-collapsed">
            <div class="card-header bg-transparent header-elements-inline">
                <span class="text-uppercase font-size-sm font-weight-semibold">Fruits & Vegetables</span>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="#">
                    <div class="form-group">
                        <label>Select Item</label>
                        <select class="form-control-sm select-search" data-fouc>
                            <option value="">-- Select Material --</option>
                            <?php
                            foreach ($data['material'] as $row) {
                                if ($row['category_code'] == 'FP') {
                                    echo '<option value="' . $row['product_id'] . '">' . $row['product_name'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Quantity</label>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input type="number" class="form-control" placeholder="Input QTY">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input type="text" class="form-control" placeholder="Unit" value="KG">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Your message:</label>
                        <textarea rows="3" cols="3" class="form-control" placeholder="You don't have to fill"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-info btn-block"><i class="icon-cart-add"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /Fruits & Vegetables -->
        <!-- Water Based -->
        <div class="card card-collapsed">
            <div class="card-header bg-transparent header-elements-inline">
                <span class="text-uppercase font-size-sm font-weight-semibold">Water Based</span>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
            <form action="#">
                    <div class="form-group">
                        <label>Select Item</label>
                        <select class="form-control-sm select-search" data-fouc>
                            <option value="">-- Select Material --</option>
                            <?php
                            foreach ($data['material'] as $row) {
                                if ($row['category_code'] == 'WB') {
                                    echo '<option value="' . $row['product_id'] . '">' . $row['product_name'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Quantity</label>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input type="number" class="form-control" placeholder="Input QTY">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input type="text" class="form-control" placeholder="Unit" value="KG">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Your message:</label>
                        <textarea rows="3" cols="3" class="form-control" placeholder="You don't have to fill"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-info btn-block"><i class="icon-cart-add"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /Water Based -->
        <!-- Grains & Paddy -->
        <div class="card card-collapsed">
            <div class="card-header bg-transparent header-elements-inline">
                <span class="text-uppercase font-size-sm font-weight-semibold">Grains & Paddy</span>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="#">
                    <div class="form-group">
                        <label>Select Item</label>
                        <select class="form-control-sm select-search" data-fouc>
                            <option value="">-- Select Material --</option>
                            <?php
                            foreach ($data['material'] as $row) {
                                if ($row['category_code'] == 'GP') {
                                    echo '<option value="' . $row['product_id'] . '">' . $row['product_name'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Quantity</label>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input type="number" class="form-control" placeholder="Input QTY">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input type="text" class="form-control" placeholder="Unit" value="KG">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Your message:</label>
                        <textarea rows="3" cols="3" class="form-control" placeholder="You don't have to fill"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-info btn-block"><i class="icon-cart-add"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /Grains & Paddy -->
        <!-- Dairy -->
        <div class="card card-collapsed">
            <div class="card-header bg-transparent header-elements-inline">
                <span class="text-uppercase font-size-sm font-weight-semibold">Dairy</span>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="#">
                    <div class="form-group">
                        <label>Select Item</label>
                        <select class="form-control-sm select-search" data-fouc>
                            <option value="">-- Select Material --</option>
                            <?php
                            foreach ($data['material'] as $row) {
                                if ($row['category_code'] == 'DR') {
                                    echo '<option value="' . $row['product_id'] . '">' . $row['product_name'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Quantity</label>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input type="number" class="form-control" placeholder="Input QTY">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input type="text" class="form-control" placeholder="Unit" value="KG">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Your message:</label>
                        <textarea rows="3" cols="3" class="form-control" placeholder="You don't have to fill"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-info btn-block"><i class="icon-cart-add"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /Dairy -->
        <!-- Additional -->
        <div class="card card-collapsed">
            <div class="card-header bg-transparent header-elements-inline">
                <span class="text-uppercase font-size-sm font-weight-semibold">Additional</span>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="#">
                    <div class="form-group">
                        <label>Select Item</label>
                        <select class="form-control-sm select-search" data-fouc>
                            <option value="">-- Select Material --</option>
                            <?php
                            foreach ($data['material'] as $row) {
                                if ($row['category_code'] == 'AD') {
                                    echo '<option value="' . $row['product_id'] . '">' . $row['product_name'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Quantity</label>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input type="number" class="form-control" placeholder="Input QTY">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input type="text" class="form-control" placeholder="Unit" value="KG">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Your message:</label>
                        <textarea rows="3" cols="3" class="form-control" placeholder="You don't have to fill"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-info btn-block"><i class="icon-cart-add"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /Additional -->
    </div>


    <div class="col-lg-7 col-md-7 col-sm-12">
        <!-- Invoice template -->
        <div class="card">
            <div class="card-header bg-transparent header-elements-inline">
                <h6 class="card-title">Supply Needs</h6>
                <div class="header-elements">
                    Saturday, 02 October 2021
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-4">
                            <ul class="list list-unstyled mb-0">
                                <li class="text-warning font-weight-bold h2">Double U Steak</li>
                                <li>Cabang Bekasi, Jl. KH Agus Salim No. 50 Bekasi Jaya</li>
                                <li>888-555-2311</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-4">
                            <div class="text-sm-right">
                                <h4 class="text-primary mb-2 mt-md-2">Request Number : REQ2110BK001</h4>
                                <ul class="list list-unstyled mb-0">
                                    <li>Supply request date : <span class="font-weight-semibold">January 12, 2015</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-md-flex flex-md-wrap">
                    <div class="mb-4 mb-md-2">
                        <span class="text-muted">Invoice To:</span>
                        <ul class="list list-unstyled mb-0">
                            <li>
                                <h5 class="my-2">Central Kitchen <span class="text-warning font-weight-bold h5"><?= $data['company']->company_name ?></span></h5>
                            </li>
                            <li><span class="font-weight-semibold"><?= $data['company']->address ?></span></li>
                            <li><?= $data['company']->phone_number ?></li>
                            <li><a href="#"><?= $data['company']->email ?></a></li>
                        </ul>
                    </div>

                    <div class="mb-2 ml-auto">
                        <span class="text-muted">Noted And Supply Request:</span>
                        <div class="d-flex flex-wrap wmin-md-400">
                            <ul class="list list-unstyled mb-0">
                                <li>
                                    <h5 class="my-2">Status:</h5>
                                </li>
                                <li>Noted:</li>
                            </ul>

                            <ul class="list list-unstyled text-right mb-0 ml-auto">
                                <li>
                                    <span class="badge bg-danger-400 ml-md-auto my-2 mt-2">Urgent</span>
                                </li>
                                <li style="max-width: 20rem;"><span class="mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex quibusdam sapiente laudantium expedita.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Item</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h6 class="mb-0">Sirloin Australia - <small>Animal Protein</small></h6>
                            </td>
                            <td>12</td>
                            <td>KG</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-danger btn-sm"><i class="icon-trash mr-2"></i> Drop</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="mb-0">Wagyu A5 - <small>Animal Protein</small></h6>
                            </td>
                            <td>21</td>
                            <td>KG</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-danger btn-sm"><i class="icon-trash mr-2"></i>Drop</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="card-body">
                <div class="d-md-flex flex-md-wrap">
                    <div class="pt-2 mb-3">
                        <h6 class="mb-3">Authorized person</h6>
                        <ul class="list-unstyled text-muted">
                            <li>Admin Cabang Bekasi</li>
                            <li>Jl. Bekasi Jaya No. 50</li>
                            <li>Bekasi Timur, Bekasi</li>
                            <li>888-555-2311</li>
                        </ul>
                    </div>

                    <div class="pt-2 mb-3 wmin-md-400 ml-auto">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Animal Protein:</th>
                                        <td class="text-right">33 KG</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="text-right mt-3">
                            <button type="button" class="btn btn-primary btn-labeled btn-labeled-left"><b><i class="icon-paperplane"></i></b> Send Request</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <span class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, accusantium, vel, repudiandae eveniet blanditiis voluptas sapiente soluta expedita sed commodi autem saepe possimus ab eos nisi. Quas cumque hic consequuntur.</span>
            </div>
        </div>
        <!-- /invoice template -->
    </div>
    <div class="col-lg-2 col-md-2 col-sm-12">
        <div class="card">
            <div class="card-header bg-transparent header-elements-inline">
                <h6 class="card-title">Configuration</h6>
                <div class="header-elements">
                    <small>Before Request</small>
                </div>
            </div>
            <div class="card-body">
                <form action="#">
                    <div class="form-group">
                        <label>Select Status</label>
                        <select class="form-control">
                            <option value="opt2">Urgent</option>
                            <option value="opt3">Normal Request</option>
                            <option value="opt4">Option 4</option>
                            <option value="opt5">Option 5</option>
                            <option value="opt6">Option 6</option>
                            <option value="opt7">Option 7</option>
                            <option value="opt8">Option 8</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Your Note:</label>
                        <textarea rows="3" cols="3" class="form-control" placeholder="You don't have to fill"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-info btn-block"><i class="icon-price-tags"> Pin</i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

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