<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- Invoice archive -->
        <div class="card">
            <div class="card-header bg-transparent header-elements-inline">
                <!-- <h6 class="card-title">Invoice archive</h6> -->
                <button type="button" class="btn bg-teal" data-toggle="modal" data-target="#modal_form_add"><i class="icon-add-to-list"></i> &nbsp; Add New Material</button>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <table class="table table-lg table-material">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Period</th>
                        <th>Material Name</th>
                        <th>Material Unit</th>
                        <th>Product Price</th>
                        <th>After Margin</th>
                        <th>Description</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody id="table-body-material">

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

            <form action="#" class="form-horizontal" name="add-material" id="add-material">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Material Name</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="Name" class="form-control" name="product_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Material Category</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="category_id">
                                <option value="">-- Select Category --</option>
                                <?php
                                foreach ($data_category as $row) {
                                    echo '<option value="' . $row['category_id'] . '">' . $row['category_name'] . '</option>';
                                }

                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Unit</label>
                        <div class="col-sm-9">
                            <!-- <input type="text" placeholder="Unit" class="form-control" name="product_unit"> -->
                            <div class="form-group mb-3 mb-md-2">
                                <!-- <label class="font-weight-semibold">Radio buttons</label> -->
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" class="form-check-input-styled-primary" value="KG" checked data-fouc>
                                                KG
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" class="form-check-input-styled-danger" value="PACK" data-fouc>
                                                PACK
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" class="form-check-input-styled-success" value="PCS" data-fouc>
                                                PCS
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" class="form-check-input-styled-warning" value="TBG" data-fouc>
                                                TBG
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" class="form-check-input-styled-info" value="BTL" data-fouc>
                                                BTL
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" class="form-check-input-styled-custom" value="GAL" data-fouc>
                                                GAL
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" class="form-check-input-styled-warning" value="TBG" data-fouc>
                                                TBG
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" class="form-check-input-styled-info" value="CAN" data-fouc>
                                                CAN
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" class="form-check-input-styled-custom" value="ROLL" data-fouc>
                                                ROLL
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" class="form-check-input-styled-warning" value="TBG" data-fouc>
                                                CTN
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" class="form-check-input-styled-info" value="BOC" data-fouc>
                                                BOX
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" class="form-check-input-styled-custom" value="PACK 250GR" data-fouc>
                                                PACK 250GR
                                            </label>
                                        </div>
                                    </div>

                                    <!-- <div class="col-md-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" class="form-check-input-styled-warning" value="CAN" data-fouc>
                                                CAN
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" class="form-check-input-styled-info" value="ROLL" data-fouc>
                                                ROLL
                                            </label>
                                        </div>

                                        <input type="unitDefinition" placeholder="Unit" class="form-control" name="product_price">
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Price</label>
                        <div class="col-sm-9">
                            <input type="number" placeholder="Price" class="form-control" name="product_price">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Margin Price</label>
                        <div class="col-sm-9">
                            <input type="number" placeholder="Margin Price" name="product_margin_price" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">After Margin</label>
                        <div class="col-sm-9">
                            <input type="number" placeholder="Price After Margin" name="product_after_margin_price" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Description</label>
                        <div class="col-sm-9">
                            <textarea rows="3" cols="3" class="form-control" placeholder="You don't have to fill" name="product_description"></textarea>
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

            <form action="#" class="form-horizontal" name="edit-material" id="edit-material">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Material Name</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="ID" class="form-control" name="product_id" id="product_id">
                            <input type="text" placeholder="Name" class="form-control" name="product_name" id="product_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Material Category</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="category_id" id="category_id">
                                <option value="">-- Select Category --</option>
                                <?php
                                foreach ($data_category as $row) {
                                    echo '<option value="' . $row['category_id'] . '">' . $row['category_name'] . '</option>';
                                }

                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Unit</label>
                        <div class="col-sm-9">
                            <!-- <input type="text" placeholder="Unit" class="form-control" name="product_unit"> -->
                            <div class="form-group mb-3 mb-md-2">
                                <!-- <label class="font-weight-semibold">Radio buttons</label> -->
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" id="product_unit" class="form-check-input-styled-primary" data-status="edit" value="KG" data-fouc>
                                                KG
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" id="jj" class="form-check-input-styled-danger" data-status="edit" value="PACK" data-fouc>
                                                PACK
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" id="product_unit" class="form-check-input-styled-success" value="PCS" data-fouc>
                                                PCS
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" id="product_unit" class="form-check-input-styled-warning" value="TBG" data-fouc>
                                                TBG
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" id="product_unit" class="form-check-input-styled-info" value="BTL" data-fouc>
                                                BTL
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" id="product_unit" class="form-check-input-styled-custom" value="GAL" data-fouc>
                                                GAL
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" id="product_unit" class="form-check-input-styled-warning" value="TBG" data-fouc>
                                                TBG
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" id="product_unit" class="form-check-input-styled-info" value="CAN" data-fouc>
                                                CAN
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" id="product_unit" class="form-check-input-styled-custom" value="ROLL" data-fouc>
                                                ROLL
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" id="product_unit" class="form-check-input-styled-warning" value="TBG" data-fouc>
                                                CTN
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" id="product_unit" class="form-check-input-styled-info" value="BOC" data-fouc>
                                                BOX
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" id="product_unit" class="form-check-input-styled-custom" value="PACK 250GR" data-fouc>
                                                PACK 250GR
                                            </label>
                                        </div>
                                    </div>

                                    <!-- <div class="col-md-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" class="form-check-input-styled-warning" value="CAN" data-fouc>
                                                CAN
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="product_unit" class="form-check-input-styled-info" value="ROLL" data-fouc>
                                                ROLL
                                            </label>
                                        </div>

                                        <input type="unitDefinition" placeholder="Unit" class="form-control" name="product_price">
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Price</label>
                        <div class="col-sm-9">
                            <input type="number" placeholder="Price" class="form-control" name="product_price" id="product_price">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Margin Price</label>
                        <div class="col-sm-9">
                            <input type="number" placeholder="Margin Price" name="product_margin_price" id="product_margin_price" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">After Margin</label>
                        <div class="col-sm-9">
                            <input type="number" placeholder="Price After Margin" name="product_after_margin_price" id="product_after_margin_price" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Description</label>
                        <div class="col-sm-9">
                            <textarea rows="3" cols="3" class="form-control" placeholder="You don't have to fill" name="product_description" id="product_description"></textarea>
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