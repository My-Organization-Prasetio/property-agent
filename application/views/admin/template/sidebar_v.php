    <!-- Main -->
    <li class="nav-item-header mt-0">
        <div class="text-uppercase font-size-xs line-height-xs">Menu Utama</div> <i class="icon-menu" title="Main"></i>
    </li>
    <li class="nav-item">
        <a href="<?= base_url() ?>admin" class="nav-link">
            <i class="icon-home2"></i>
            <span>
                Dashboard
                <span class="d-block font-weight-normal opacity-50">Halaman Rumah</span>
            </span>
        </a>
    </li>
    <li class="nav-item"><a href="<?= base_url() ?>admin/service" class="nav-link"><i class="icon-wall icon"></i>Transaksi & Layanan</a></li> 
    <li class="nav-item"><a href="<?= base_url() ?>admin/property" class="nav-link"><i class="icon-office"></i>Manajemen Properti</a></li>  
    <li class="nav-item"><a href="<?= base_url() ?>admin/report" class="nav-link"><i class="icon-file-presentation2 icon"></i> Laporan </a></li>  

    <!-- Tambahan -->
    <li class="nav-item-header mt-0">
        <div class="text-uppercase font-size-xs line-height-xs">Tambahan</div> <i class="icon-menu" title="Main"></i>
    </li>
    <li class="nav-item nav-item-submenu">
        <a href="#" class="nav-link"><i class="icon-grid icon"></i> <span>Master</span></a>
        <ul class="nav nav-group-sub" data-submenu-title="Themes">
            <li class="nav-item"><a href="<?= base_url() ?>admin/city" class="nav-link">Kota</a></li>
            <li class="nav-item"><a href="<?= base_url()?>admin/area" class="nav-link">Wilayah</a></li>
            <li class="nav-item"><a href="<?= base_url() ?>admin/asset-category" class="nav-link">Jenis Properti</a></li>
            <li class="nav-item"><a href="<?= base_url() ?>admin/owner" class="nav-link">Pemilik Properti</a></li>
            <!-- <li class="nav-item"><a href="<?= base_url() ?>admin/employee" class="nav-link">Karyawan</a></li> -->
            <li class="nav-item"><a href="<?= base_url() ?>master/material-category" class="nav-link disabled">Segera Hadir<span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
        </ul>
    </li>
    <li class="nav-item"><a href="<?= base_url() ?>admin/company" class="nav-link"><i class="icon-office"></i>Tentang Perusahaan</a></li>
    <li class="nav-item"><a href="<?= base_url() ?>admin/user" class="nav-link"><i class="icon-people"></i>Pengguna</a></li>

    <!-- Akses Pengguna -->
    <li class="nav-item-header mt-0">
        <div class="text-uppercase font-size-xs line-height-xs">Akses Pengguna</div> <i class="icon-menu" title="Main"></i>
    </li>
    <li class="nav-item"><a href="javascript:void(0)" class="nav-link" data-toggle="modal" data-target="#modal-change-photo"><i class="icon-shutter"></i>Ubah Foto</a></li>
    <li class="nav-item"><a href="javascript:void(0)" class="nav-link" data-toggle="modal" data-target="#modal-change-password"><i class="icon-lock"></i>Ubah Password</a></li>
    <li class="nav-item"><a href="<?= base_url() ?>admin/auth/logout" class="nav-link"><i class="icon-exit3"></i> <span>Keluar</span></a></li>

    <li class="nav-item"><a href="" class="nav-link disabled"><span>Ubah password secara berkala untuk meningkatkan keamanan.</span></a></li>