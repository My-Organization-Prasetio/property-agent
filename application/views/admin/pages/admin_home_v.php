<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-3 mt-1 mb-1">
                        <a href="<?= base_url()?>admin/service" type="button" class="btn bg-blue-700 btn-block btn-float">
                            <i class="icon-folder-plus2 icon-2x"></i>
                            <span>Layanan</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 mt-1 mb-1">
                        <a href="<?= base_url()?>admin/property" type="button" class="btn bg-teal-700 btn-block btn-float">
                            <i class="icon-office icon-2x"></i>
                            <span>Properti</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 mt-1 mb-1">
                        <a href="<?= base_url()?>admin/asset-category" type="button" class="btn bg-purple-300 btn-block btn-float">
                            <i class="icon-make-group icon-2x"></i>
                            <span>Jenis Properti</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 mt-1 mb-1">
                        <a href="<?= base_url()?>admin/area" type="button" class="btn bg-warning-400 btn-block btn-float">
                            <i class="icon-lan2 icon-2x"></i>
                            <span>Wilayah</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 mt-1 mb-1">
                        <a href="<?= base_url()?>admin/city" type="button" class="btn bg-pink-400 btn-block btn-float">
                            <i class="icon-city icon-2x"></i>
                            <span>Kota</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 mt-1 mb-1">
                        <a href="<?= base_url()?>admin/owner" type="button" class="btn bg-indigo-400 btn-block btn-float">
                            <i class="icon-clipboard2 icon-2x"></i>
                            <span>Pemilik</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 mt-1 mb-1">
                        <a href="<?= base_url()?>admin/report" type="button" class="btn bg-brown-400 btn-block btn-float">
                            <i class="icon-file-presentation2 icon-2x"></i>
                            <span>Laporan</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 mt-1 mb-1">
                        <a href="<?= base_url()?>admin/company" type="button" class="btn bg-green-400 btn-block btn-float">
                            <i class="icon-office icon-2x"></i>
                            <span>Perusahaan</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 mt-1 mb-1">
                        <a href="<?= base_url()?>admin/user" type="button" class="btn bg-slate-400 btn-block btn-float">
                            <i class="icon-people icon-2x"></i>
                            <span>Pengguna</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 mt-1 mb-1">
                        <a href="<?= base_url()?>admin/auth/logout" type="button" class="btn bg-teal-400 btn-block btn-float">
                            <i class="icon-exit2 icon-2x"></i>
                            <span>Keluar</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Support tickets -->
        <div class="card">
            <div class="card-header header-elements-sm-inline">
                <h6 class="card-title text-teal font-weight-bold">Daftar Agen & Penanggungjawab</h6>
                <div class="header-elements">
                    <a class="text-default dropdown-toggle">
                        <i class="icon-calendar3 mr-2"></i>
                        30 Januari 2022
                    </a>
                </div>
            </div>
            <div class="card-body d-md-flex align-items-md-center justify-content-md-between flex-md-wrap">
            <!-- <div class="card-body d-md-flex align-items-md-center justify-content-md-between flex-md-wrap">
                <div class="d-flex align-items-center mb-3 mb-md-0">
                    <div id="tickets-status"></div>
                    <div class="ml-3">
                        <h5 class="font-weight-semibold mb-0">14,327 <span class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i> (+2.9%)</span></h5>
                        <span class="badge badge-mark border-success mr-1"></span> <span class="text-muted">Jun 16, 10:00 am</span>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-3 mb-md-0">
                    <a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
                        <i class="icon-alarm-add"></i>
                    </a>
                    <div class="ml-3">
                        <h5 class="font-weight-semibold mb-0">1,132</h5>
                        <span class="text-muted">requested outlet</span>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-3 mb-md-0">
                    <a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
                        <i class="icon-spinner11"></i>
                    </a>
                    <div class="ml-3">
                        <h5 class="font-weight-semibold mb-0">06:25:00</h5>
                        <span class="text-muted">submission item</span>
                    </div>
                </div>

                <div>
                    <div class="btn-group">
                        <button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left"><b><i class="icon-stats-bars2"></i></b> Report</button>
                        <button type="button" class="btn bg-teal-400 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"></button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(171px, 36px, 0px);">
                            <a href="#" class="dropdown-item"><i class="icon-stack-down"></i> | &nbsp; Requested</a>
                            <a href="#" class="dropdown-item"><i class="icon-stack-up"></i> | &nbsp; Submission</a>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="table-responsive">
                <table class="table text-nowrap">
                    <thead>
                        <tr>
                            <th style="width: 50px">No</th>
                            <th style="width: 300px;">Nama Lengkap</th>
                            <th>Penghubung</th>
                            <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-active table-border-double">
                            <td colspan="3">Agen Properti</td>
                            <td class="text-right">
                                <span class="badge bg-blue badge-pill"><?= count($data['agent']) ?></span>
                            </td>
                        </tr>

                        <?php
                            foreach($data['agent'] as $row){
                                echo '<tr>
                                <td class="text-center">
                                    <i class="icon-checkmark3 text-success"></i>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="mr-3">
                                            <a href="#" class="btn bg-teal-400 rounded-round btn-icon btn-sm">
                                                <span class="letter-icon"></span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title">'.$row['user_full_name'].'</a>
                                            <div class="text-muted font-size-sm"><span class="badge badge-mark border-blue mr-1"></span>'.ucfirst($row['status']).'</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-default">
                                        <div class="font-weight-semibold">'.$row['user_phone_number'].'</div>
                                        <span class="text-muted">E-mail : '.$row['user_email'].'</span>
                                    </a>
                                </td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="list-icons-item dropdown">
                                            <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>';
                            }
                        ?>

                        <tr class="table-active table-border-double">
                            <td colspan="3">Penanggung Jawab Lainnya</td>
                            <td class="text-right">
                                <span class="badge bg-success badge-pill"><?= count($data['admin']) ?></span>
                            </td>
                        </tr>

                        <?php
                            foreach($data['admin'] as $row){
                                echo '<tr>
                                <td class="text-center">
                                    <i class="icon-checkmark3 text-success"></i>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="mr-3">
                                            <a href="#" class="btn bg-teal-400 rounded-round btn-icon btn-sm">
                                                <span class="letter-icon"></span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title">'.$row['user_full_name'].'</a>
                                            <div class="text-muted font-size-sm"><span class="badge badge-mark border-blue mr-1"></span>'.ucfirst($row['status']).'</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-default">
                                        <div class="font-weight-semibold">'.$row['user_phone_number'].'</div>
                                        <span class="text-muted">E-mail : '.$row['user_email'].'</span>
                                    </a>
                                </td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="list-icons-item dropdown">
                                            <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
                <hr class="mt-2">
                <a href="<?= base_url() ?>admin/user" class="bg-light text-grey w-100 py-2 border-top" data-popup="tooltip" title="Tampilkan lebih banyak"><i class="icon-menu7 d-block top-0"></i></a>
            </div>
        </div>
        <!-- /support tickets -->
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <!-- Progress counters -->
        <div class="row">
            <div class="col-sm-6">

                <!-- Available hours -->
                <div class="card text-center">
                    <div class="card-body">

                        <!-- Progress counter -->
                        <div class="svg-center position-relative" id="hours-available-progress"></div>
                        <!-- /progress counter -->


                        <!-- Bars -->
                        <div id="hours-available-bars"></div>
                        <!-- /bars -->

                    </div>
                </div>
                <!-- /available hours -->

            </div>

            <div class="col-sm-6">

                <!-- Productivity goal -->
                <div class="card text-center">
                    <div class="card-body">

                        <!-- Progress counter -->
                        <div class="svg-center position-relative" id="goal-progress"></div>
                        <!-- /progress counter -->

                        <!-- Bars -->
                        <div id="goal-bars"></div>
                        <!-- /bars -->

                    </div>
                </div>
                <!-- /productivity goal -->

            </div>
        </div>
        <!-- /progress counters -->
        <!-- My messages -->
        <!-- <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title text-teal"><b>Kategori Layanan Terbanyak</b></h5>
                <div class="header-elements">
                    <span><i class="icon-history text-warning mr-2"></i> Jul 7, 10:30</span>
                </div>
            </div>

            <div class="card-body py-0">
                <div class="row text-center">
                    <div class="col-4">
                        <div class="mb-3">
                            <h5 class="font-weight-semibold mb-0">2,345</h5>
                            <span class="text-muted font-size-sm">Rumah</span>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="mb-3">
                            <h5 class="font-weight-semibold mb-0">3,568</h5>
                            <span class="text-muted font-size-sm">Apartmen</span>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="mb-3">
                            <h5 class="font-weight-semibold mb-0">32,693</h5>
                            <span class="text-muted font-size-sm">Ruko</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Daily financials -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title text-teal"><b>Daftar Properti</b></h5>
                <div class="header-elements">
                    <div class="form-check form-check-inline form-check-right form-check-switchery form-check-switchery-sm">
                        <label class="form-check-label">
                            <!-- <input type="checkbox" class="form-input-switchery" id="realtime" checked data-fouc> -->

                        </label>
                    </div>
                    <span class="badge bg-info-400 badge-pill">1.299 Properti</span>
                </div>
            </div>

            <div class="card-body">
                <div class="chart mb-3" id="bullets"></div>

                <ul class="media-list">
                    <?php
                        foreach($data['properties'] as $row){
                            echo '<li class="media">
                            <div class="mr-3">
                                <a href="#" class="btn bg-transparent border-info border-2 btn-icon"><img src="'.base_url().'/public/images/property/property-home-icon.png" style="width: 3rem;" alt=""></i></a>
                            </div>
    
                            <div class="media-body">
                                <h5 class="font-weight-bold text-info">'.$row['property_title'].'</h5>
                                <div class="text-muted">'.$row['city_name'].' | '.$row['area_name'].' | '.$row['unit_number'].'</div>
                            </div>
                        </li>';
                        }
                    ?>
                </ul>

                <hr>
                <a href="<?= base_url() ?>admin/property" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Tampilkan lebih banyak"><i class="icon-menu7 d-block top-0"></i></a>
            </div>
        </div>
        <!-- /daily financials -->
    </div>
</div>