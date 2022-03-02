<div class="col-lg-9 order-1 order-lg-2">
    <!-- shop-top-bar start -->
    <div class="shop-top-bar">
        <div class="shop-bar-inner">
            <div class="product-view-mode">
                <!-- shop-item-filter-list start -->
                <ul class="nav shop-item-filter-list" role="tablist">
                    <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="<?= base_url() ?>public/front-web/#grid-view"><i class="fa fa-th"></i></a></li>
                    <!-- <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view" href="<?= base_url() ?>public/front-web/#list-view"><i class="fa fa-th-list"></i></a></li> -->
                    <li class="active" title="Filter" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="<?= base_url() ?>public/front-web/#grid-view"><i class="fa fa-filter" aria-hidden="true"></i></i></a></li>
                </ul>
                <!-- shop-item-filter-list end -->
            </div>
            <div class="toolbar-amount">
                <span class="showing-rows">Ditampilkan 1 dari 1 properti</span>
            </div>
        </div>
        <!-- product-select-box start -->
        <div class="product-select-box">
            <div class="product-short">
                <p id="content-title">Semua daftar properti</p>
            </div>
        </div>
        <!-- product-select-box end -->
    </div>
    <!-- shop-top-bar end -->
    <!-- shop-products-wrapper start -->
    <div class="shop-products-wrapper">
        <div class="tab-content">
            <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                <div class="product-area shop-product-area">
                    <div class="row" id="property-list">
                        <!-- Property List -->
                    </div>
                </div>
            </div>
            <div id="list-view" class="tab-pane fade product-list-view" role="tabpanel">
                <!-- You can add and use list-view here -->
            </div>
            <div class="paginatoin-area">
                <div class="row">
                    <div class="col-lg-6 col-md-6 pt-xs-15">
                        <p class="showing-rows">Ditampilkan 1 dari 1 properti</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <ul class="pagination-box pt-xs-20 pb-xs-15" id="paging-collection">
                            <!-- Pagination Here -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop-products-wrapper end -->
</div>