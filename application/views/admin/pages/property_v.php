<!-- <script src="<?= base_url() ?>public/build/js/pages/form_wizard.js"></script> -->
<div class="row">
    <div class="col-lg-9 col-md-9 col-sm-12">
        <div class="card">

            <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                    <li class="nav-item"><a href="#justified-right-icon-tab1" class="nav-link active show font-weight-bold" data-toggle="tab"><b>Formulir Tambah Properti <i class="icon-file-plus2 ml-2"></i></b> </a></li>
                    <li class="nav-item"><a href="#justified-right-icon-tab2" class="nav-link font-weight-bold" data-toggle="tab"><b>Daftar Properti <i class="icon-menu7 ml-2"></i></b></a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade active show" id="justified-right-icon-tab1">
                        <!-- Form Add -->
                        <?php
                            $this->load->view('admin/pages/property/form_add_v');
                        ?>
                        <!-- End Form Add -->
                    </div>

                    <div class="tab-pane fade" id="justified-right-icon-tab2">
                        <!-- Property List -->
                        <?php
                            $this->load->view('admin/pages/property/property_list_v');
                        ?>
                        <!-- End Property List -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12">
        <!-- Property Right Content -->
        <?php
            $this->load->view('admin/pages/property/property_right_content_v');
        ?>
        <!-- End Property Right Content -->
    </div>
</div>

<!-- Modal Edit -->
<div id="modal_form_edit" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Edit</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="#" class="form-horizontal" name="edit-owner" id="edit-owner">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Nama</label>
                        <div class="col-sm-9">
                            <input type="hidden" placeholder="" class="form-control" name="owner_id" id="owner_id">
                            <input type="text" placeholder="" class="form-control" name="owner_name" id="owner_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Jenis Owner</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="owner_type" id="owner_type">
                                <option value="Perorangan">Perorangan</option>
                                <option value="Perusahaan">Perusahaan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">ID Owner / No. Perusahaan</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="11011101111" class="form-control" name="id_number" id="id_number">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Jenis ID</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" class="form-control" name="id_number_type" id="id_number_type">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Nomor Telp.</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="085711112121" class="form-control" name="owner_phone_number" id="owner_phone_number">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Email</label>
                        <div class="col-sm-9">
                            <input type="email" placeholder="hana2022@mail.com" class="form-control" name="owner_email" id="owner_email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Alamat</label>
                        <div class="col-sm-9">
                            <textarea rows="3" cols="3" class="form-control" placeholder="Tidak wajib diisi" name="address" id="address"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn bg-primary">Submit form</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Edit -->