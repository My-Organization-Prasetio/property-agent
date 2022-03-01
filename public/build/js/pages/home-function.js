//On Load Page
$(document).ready(function () {
    loadPage(1)
});

//Get data
function viewAllHome(page = 1) {
    $.ajax({
        url: rootApp + "api/property/page/" + page,
        type: "GET",
        dataType: "json",
        success: function (res) {
            //Render data to view
            __renderData(res.data)

            //Create link page
            total_rows = res.total
            const linkCollection = createLink(res.page, res.total, res.per_page)
            $('#paging-collection').html(linkCollection)
            $('.showing-rows').html(`Ditampilkan ${res.showing} dari total ${res.total} Properti`)
            $('#content-title').html('Semua daftar properti')
        },
        error: function (request, error) {
            // console.log("Request: " + JSON.stringify(request));
        },
    });
}

//Render view list
function __renderData(data) {
    var listData = ``;
    $.each(data, function (index, key) {
        listData += `<div class="col-lg-3 col-md-3 col-sm-4 mt-40">
					<div class="single-product-wrap">
						<div class="product_desc">
							<div class="product_desc_info">
								<div class="product-review">
									<h5 class="manufacturer">
										<a href="#">${key.area_name}</a>
									</h5>
									<div class="rating-box">
										<ul class="rating">
											${key.sale_type == 1 ? '<span class="badge badge-info">Sewa</span>' : '<span class="badge badge-warning">Jual</span>'}
										</ul>
									</div>
								</div>
								<h4><a class="product_name" href="#">${key.property_title}</a></h4>
								<h5 class="manufacturer mt-2">
									${key.address}
								</h5>
								<p><i class="fa fa-bed mr-1"></i>${key.bedroom} Kamar Tidur</p>
								<p><i class="fa fa-address-card mr-1"></i>${key.agent_name}</p>
								<p><i class="fa fa-arrows mr-1"></i>Luas ${numberWithCommas(key.land_area)} m<sup>2</sup></p>
								<div>
									<span class="new-price">Rp. ${numberWithCommas(key.price)}</span>
								</div>
							</div>
							<div class="add-actions">
								<ul class="add-actions-link">
									<li class="add-cart active" style="width: 100%;"><a href="javascript:void(0)">Info Hubungi Agen</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>`
    })
    $('#property-list').html(listData)
}


//Pagination
var current_page = 1;
var total_rows = 0;

function prevPage() {
    if (current_page > 1) {
        current_page--;
        loadPage(current_page);
    }
}

function nextPage() {
    if (current_page < total_rows) {
        current_page++;
        loadPage(current_page);
    }
}

function loadPage(page = 1) {
    viewAllHome(page)
}

function createLink(page = 1, totalRows = 1, perPage = 1) {
    var linkCollection = ``
    var numPagesCollection = Math.ceil(totalRows / perPage)

    //Push Previous button
    if (page != 1) {
        linkCollection += `<li><a href="javascript:prevPage()" id="btn_prev" class="Previous"><i class="fa fa-chevron-left"></i> Sebelumnya</a></li>`
    } else {
        linkCollection += `<li><a href="javascript:void(0)" id="btn_prev" class="text-secondary"><i class="fa fa-chevron-left"></i> Sebelumnya</a></li>`
    }

    //Push target page link when the value is less than current page
    var min = 1;
    for (var i = page - 3; i <= page; i++) {
        if (i >= 1 && i != page) {
            // linkCollection += `<a href="javascript:loadPage(${i})" id="btn_prev">${i}</a>`
            linkCollection += `<li><a href="javascript:loadPage(${i})"">${i}</a></li>`
        }
    }

    //Push target page link for the current page
    linkCollection += `<li class="active"><a href="javascript:loadPage(${page})"">${page}</a></li>`

    //Push target page link when the value is more than current page
    var min = 1;
    for (var i = page; i <= parseInt(page) + 2; i++) {
        if (i <= numPagesCollection && i != page) {
            linkCollection += `<li><a href="javascript:loadPage(${i})"">${i}</a></li>`
        }
    }

    //Push Next button
    if (page != numPagesCollection) {
        linkCollection += `<li><a href="javascript:nextPage()" id="btn_next" class="Next"> Next <i class="fa fa-chevron-right"></i></a></li>`
    } else {
        linkCollection += `<li><a href="javascript:void(0)" id="btn_next" class="text-secondary"> Next <i class="fa fa-chevron-right"></i></a></li>`
    }

    return linkCollection
}