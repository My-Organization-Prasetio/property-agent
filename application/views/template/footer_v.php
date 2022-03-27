<div class="footer">
    <!-- Begin Footer Static Top Area -->
    <div class="footer-static-top">
        <div class="container">
            <!-- Begin Footer Shipping Area -->
            <div class="footer-shipping pt-60 pb-55 pb-xs-25">
                <div class="row">
                    <!-- Begin Li's Shipping Inner Box Area -->
                    <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                        <div class="li-shipping-inner-box">
                            <div class="shipping-icon">
                                <img src="<?= base_url() ?>public/front-web/images/shipping-icon/1.png" alt="Shipping Icon">
                            </div>
                            <div class="shipping-text">
                                <h2>Penelusuran Property</h2>
                                <p>Mempermudah dalam mencari properti yang sesuai.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Li's Shipping Inner Box Area End Here -->
                    <!-- Begin Li's Shipping Inner Box Area -->
                    <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                        <div class="li-shipping-inner-box">
                            <div class="shipping-icon">
                                <img src="<?= base_url() ?>public/front-web/images/shipping-icon/2.png" alt="Shipping Icon">
                            </div>
                            <div class="shipping-text">
                                <h2>Kontribusi</h2>
                                <p>Dapat mempermudah kontribusi antara agen property.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Li's Shipping Inner Box Area End Here -->
                    <!-- Begin Li's Shipping Inner Box Area -->
                    <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                        <div class="li-shipping-inner-box">
                            <div class="shipping-icon">
                                <img src="<?= base_url() ?>public/front-web/images/shipping-icon/3.png" alt="Shipping Icon">
                            </div>
                            <div class="shipping-text">
                                <h2>Berurusan</h2>
                                <p>Mudah untuk memberikan informasi kepada customer dengan cepat dan efisien.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Li's Shipping Inner Box Area End Here -->
                    <!-- Begin Li's Shipping Inner Box Area -->
                    <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                        <div class="li-shipping-inner-box">
                            <div class="shipping-icon">
                                <img src="<?= base_url() ?>public/front-web/images/shipping-icon/4.png" alt="Shipping Icon">
                            </div>
                            <div class="shipping-text">
                                <h2>24/7 Akses Informasi</h2>
                                <p>Dapat mengakses informasi selama 24 jam non stop.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Li's Shipping Inner Box Area End Here -->
                </div>
            </div>
            <!-- Footer Shipping Area End Here -->
        </div>
    </div>
    <!-- Footer Static Top Area End Here -->
    <!-- Begin Footer Static Middle Area -->
    <div class="footer-static-middle">
        <div class="container">
            <div class="footer-logo-wrap pt-50 pb-35">
                <div class="row">
                    <!-- Begin Footer Logo Area -->
                    <div class="col-lg-8 col-md-8">
                        <div class="footer-logo">
                            <img src="<?= base_url() ?>public/front-web/./images/logo/logo.png" alt="Footer Logo">
                            <p class="info text-justify">
                                PT. Denadi Mitra Propertindo atau yang lebih dikenal dengan Eagle Tree Property, berdiri sejak 2012 di Jakarta. Didirikan oleh tiga pelaku industri properti yang bergabung bersama, karena memiliki visi yang sama,dengan latar belakang pengalaman yang sangat mumpuni di dunia properti. Spesialisasi masing-masing pendiri yang berbeda namun dapat dipersatukan untuk menciptakan sinergi, menjadikan Eagle Tree Property sebagai perusahaan properti yang sanggup memberikan solusi terintegrasi (one-stop property solution) di bidang properti.
                            </p>
                        </div>
                        <!-- <ul class="des">
                            <li>
                                <span>Alamat: </span>
                                6688Princess Road, London, Greater London BAS 23JK, UK
                            </li>
                            <li>
                                <span>Telepon: </span>
                                <a href="<?= base_url() ?>public/front-web/#">(+123) 123 321 345</a>
                            </li>
                            <li>
                                <span>Email: </span>
                                <a href="<?= base_url() ?>public/front-web/mailto://info@yourdomain.com">info@yourdomain.com</a>
                            </li>
                        </ul> -->
                    </div>
                    <!-- Footer Logo Area End Here -->
                    <!-- Begin Footer Block Area -->
                    <div class="col-lg-4">
                        <div class="footer-block">
                            <h3 class="footer-block-title">Follow Us</h3>
                            <ul class="social-link">
                                <li class="twitter">
                                    <a href="<?php
                                                $url = $data['my_company']->url_twitter != '' ? $data['my_company']->url_twitter : 'javascript:void(0)';
                                                echo $url;
                                            ?>" data-toggle="tooltip" title="Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="google-plus">
                                    <a href="<?php
                                                $url = $data['my_company']->url_google_plus != '' ? $data['my_company']->url_google_plus : 'javascript:void(0)';
                                                echo $url;
                                            ?>" data-toggle="tooltip" title="Google +">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="facebook">
                                    <a href="<?php
                                                $url = $data['my_company']->url_facebook != '' ? $data['my_company']->url_facebook : 'javascript:void(0)';
                                                echo $url;
                                            ?>" data-toggle="tooltip" title="Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="youtube">
                                    <a href="<?php
                                                $url = $data['my_company']->url_youtube != '' ? $data['my_company']->url_youtube : 'javascript:void(0)';
                                                echo $url;
                                            ?>" data-toggle="tooltip" title="Youtube">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="instagram">
                                    <a href="<?php
                                                $url = $data['my_company']->url_instagram != '' ? $data['my_company']->url_instagram : 'javascript:void(0)';
                                                echo $url;
                                            ?>" data-toggle="tooltip" title="Instagram">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Begin Footer Newsletter Area -->
                        <div class="footer-newsletter">
                            <!-- <h4>Sign up to newsletter</h4> -->
                            <div class="footer-block">
                                <h3 class="footer-block-title">Layanan Perusahaan</h3>
                                <ul>
                                    <li><a href="javaascript:void(0)">Jual Beli Properti</a></li>
                                    <li><a href="javaascript:void(0)">Sewa Menyewa Properti</a></li>
                                    <li><a href="javaascript:void(0)">Pengembangan Aset</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Newsletter Area End Here -->
                    </div>
                    <!-- Footer Block Area End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Static Middle Area End Here -->
    <!-- Begin Footer Static Bottom Area -->
    <div class="footer-static-bottom pt-55 pb-55">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Begin Footer Links Area -->
                    <div class="footer-links">
                        <ul>
                            <?php
                                foreach($data['cities'] as $row){
                                    echo '<li><a href="javaascript:void(0)'.strtolower($row['city_name']).'">'.$row['city_name'].'</a></li>';
                                }
                            ?>
                        </ul>
                    </div>
                    <!-- Footer Links Area End Here -->
                    <!-- Begin Copyright Area -->
                    <div class="copyright text-center pt-25">
                        <span><a target="_blank" href="https://www.eagletree.co.id/id/">Design By Eagle Tree 2022</a></span>
                    </div>
                    <!-- Copyright Area End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Static Bottom Area End Here -->
</div>