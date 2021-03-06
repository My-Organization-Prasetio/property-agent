<div class="col-lg-3 order-2 order-lg-1">
    <!--sidebar-categores-box start  -->
    <div class="sidebar-categores-box mt-sm-30 mt-xs-30">
        <div class="sidebar-title">
            <h2>Kategori Penjualan</h2>
        </div>
        <div class="category-sub-menu">
            <ul>
                <li><a href="<?= base_url() ?>home/sale-type/sale" class="text-black">Properti Dijual</a></li>
                <li><a href="<?= base_url() ?>home/sale-type/rent" class="text-black">Properti Disewakan</a></li>
            </ul>
        </div>
    </div>
    <!--sidebar-categores-box end  -->
    <!--sidebar-categores-box start  -->
    <div class="sidebar-categores-box">
        <div class="sidebar-title">
            <h2>Filter By</h2>
        </div>
        <!-- btn-clear-all start -->
        <button class="btn-clear-all mb-sm-30 mb-xs-30">Clear all</button>
        <!-- btn-clear-all end -->
        <!-- filter-sub-area start -->
        <div class="filter-sub-area">
            <h5 class="filter-sub-titel">JENIS PROPERTY</h5>
            <div class="categori-checkbox">
                <form action="#">
                    <ul>
                        <li><input type="checkbox" name="product-categori"><a href="<?= base_url() ?>public/front-web/#">Rumah (13)</a></li>
                        <li><input type="checkbox" name="product-categori"><a href="<?= base_url() ?>public/front-web/#">Ruko (12)</a></li>
                        <li><input type="checkbox" name="product-categori"><a href="<?= base_url() ?>public/front-web/#">Tanah (11)</a></li>
                    </ul>
                </form>
            </div>
        </div>
        <!-- filter-sub-area end -->
        <!-- filter-sub-area start -->
        <div class="filter-sub-area pt-sm-10 pt-xs-10">
            <h5 class="filter-sub-titel">Luas</h5>
            <div class="categori-checkbox">
                <form action="#">
                    <ul>
                        <li><input type="checkbox" name="product-categori"><a href="<?= base_url() ?>public/front-web/#">
                                < 10 M</a>
                        </li>
                        <li><input type="checkbox" name="product-categori"><a href="<?= base_url() ?>public/front-web/#">> 11 M</a></li>
                    </ul>
                </form>
            </div>
        </div>
        <!-- filter-sub-area end -->
        <!-- filter-sub-area start -->
        <div class="filter-sub-area pt-sm-10 pt-xs-10">
            <h5 class="filter-sub-titel">Harga Jual</h5>
            <div class="size-checkbox">
                <form action="#">
                    <ul>
                        <li><input type="checkbox" name="product-size"><a href="<?= base_url() ?>public/front-web/#">
                                < Rp. 1000.000</a>
                        </li>
                        <li><input type="checkbox" name="product-size"><a href="<?= base_url() ?>public/front-web/#">> Rp. 1000.000</a></li>
                        <li><input type="checkbox" name="product-size"><a href="<?= base_url() ?>public/front-web/#">> Rp. 1000.000</a></li>
                        <li><input type="checkbox" name="product-size"><a href="<?= base_url() ?>public/front-web/#">> Rp. 1000.000</a></li>
                    </ul>
                </form>
            </div>
        </div>
        <!-- filter-sub-area end -->
        <!-- filter-sub-area start -->
        <div class="filter-sub-area pt-sm-10 pt-xs-10">
            <h5 class="filter-sub-titel">Kamar Tidur</h5>
            <div class="color-categoriy">
                <form action="#">
                    <ul>
                        <li><span class="white"></span><a href="<?= base_url() ?>public/front-web/#">2</a></li>
                        <li><span class="black"></span><a href="<?= base_url() ?>public/front-web/#">3</a></li>
                        <li><span class="Orange"></span><a href="<?= base_url() ?>public/front-web/#">4</a></li>
                        <li><span class="Blue"></span><a href="<?= base_url() ?>public/front-web/#">> 4</a></li>
                    </ul>
                </form>
            </div>
        </div>
        <!-- filter-sub-area end -->
    </div>
    <!--sidebar-categores-box end  -->
    <!-- category-sub-menu start -->
    <div class="sidebar-categores-box mb-sm-0 mb-xs-0">
        <div class="sidebar-title">
            <h2>Tags</h2>
        </div>
        <div class="category-tags">
            <ul>
                <?php
                    foreach($data['tags'] as $row){
                        echo '<li><a href="'.base_url().'home/tag/'.strtolower($row['tag_name']).'">'.$row['tag_name'].'</a></li>';
                    }
                ?>
            </ul>
        </div>
        <!-- category-sub-menu end -->
    </div>
</div>