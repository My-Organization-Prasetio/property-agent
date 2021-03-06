<!doctype html>
<html class="no-js" lang="zxx">

<!-- shop-left-sidebar31:47-->

<head>
    <?php
        $this->load->view('template/head_v');
    ?>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?= base_url() ?>public/front-web/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Begin Body Wrapper -->
    <div class="body-wrapper">
        <!-- Begin Header Area -->
        <header>
            <?php
                $this->load->view('template/header_v');
            ?>
        </header>
        <!-- Header Area End Here -->
        <!-- Begin Li's Breadcrumb Area -->
        <!-- <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="<?= base_url() ?>public/front-web/index.html">Home</a></li>
                            <li class="active">Shop Left Sidebar</li>
                        </ul>
                    </div>
                </div>
            </div> -->
        <!-- Li's Breadcrumb Area End Here -->
        <!-- Begin Li's Content Wraper Area -->
        <div class="content-wraper pt-35 pb-60 pt-sm-30">
            <div class="container">
                <div class="row">
                    <?php
                        !empty($content) ? $this->load->view($content) : ''
                    ?>
                    <?php
                        $this->load->view('template/sidebar_v');
                    ?>
                </div>
            </div>
        </div>
        <!-- Content Wraper Area End Here -->
        <!-- Begin Footer Area -->
        <?php
            $this->load->view('template/footer_v');
        ?>
        <!-- Footer Area End Here -->
        <!-- Begin Quick View | Modal Area -->
        <?php
            $this->load->view('template/modal_example_v');
        ?>
        <!-- Quick View | Modal Area End Here -->
    </div>
    <!-- Body Wrapper End Here -->
    <?php
        $this->load->view('template/plugins_v');
    ?>
    <script>
        // var current_page = 1;
        // var records_per_page = 2;

        // var objJson = [{
        //         adName: "AdName 1"
        //     },
        //     {
        //         adName: "AdName 2"
        //     },
        //     {
        //         adName: "AdName 3"
        //     },
        //     {
        //         adName: "AdName 4"
        //     },
        //     {
        //         adName: "AdName 5"
        //     },
        //     {
        //         adName: "AdName 6"
        //     },
        // ]; // Can be obtained from another source, such as your objJson variable

        // function prevPage() {
        //     if (current_page > 1) {
        //         current_page--;
        //         changePage(current_page);
        //     }
        // }

        // function nextPage() {
        //     if (current_page < numPages()) {
        //         current_page++;
        //         changePage(current_page);
        //     }
        // }

        // function changePage(page) {

        //     //Create link page
        //     const linkCollection = createLink(page)
        //     $('#paging-collection').html(linkCollection)
        // }

        // function numPages() {
        //     return Math.ceil(objJson.length / records_per_page);
        // }

        // function createLink(page = 1){
        //     var linkCollection = ``
        //     var numPagesCollection = numPages()

        //     //Push Previous button
        //     if (page != 1) {
        //         linkCollection += `<li><a href="javascript:prevPage()" id="btn_prev" class="Previous"><i class="fa fa-chevron-left"></i> Sebelumnya</a></li>`
        //     }else{
        //         linkCollection += `<li><a href="javascript:void(0)" id="btn_prev" class="text-secondary"><i class="fa fa-chevron-left"></i> Sebelumnya</a></li>`
        //     }

        //     //Push target page link when the value is less than current page
        //     var min = 1;
        //     for(var i=page-3; i<=page; i++){
        //         if(i>=1 && i!=page){
        //             // linkCollection += `<a href="javascript:changePage(${i})" id="btn_prev">${i}</a>`
        //             linkCollection += `<li><a href="javascript:changePage(${i})"">${i}</a></li>`
        //         }
        //     }

        //     //Push target page link for the current page
        //     linkCollection += `<li class="active"><a href="javascript:changePage(${page})"">${page}</a></li>`

        //     //Push target page link when the value is less than current page
        //     var min = 1;
        //     for(var i=page+1; i<=page+3; i++){
        //         if(i<=numPagesCollection && i!=page){
        //             linkCollection += `<li><a href="javascript:changePage(${i})"">${i}</a></li>`
        //         }
        //     }

        //     //Push Next button
        //     if (page != numPagesCollection) {
        //         linkCollection += `<li><a href="javascript:nextPage()" id="btn_next" class="Next"> Next <i class="fa fa-chevron-right"></i></a></li>`
        //     }else{
        //         linkCollection += `<li><a href="javascript:void(0)" id="btn_next" class="text-secondary"> Next <i class="fa fa-chevron-right"></i></a></li>`
        //     }

        //     return linkCollection
        // }

        // window.onload = function() {
        //     changePage(1);
        // };
    </script>
</body>

<!-- shop-left-sidebar31:48-->

</html>