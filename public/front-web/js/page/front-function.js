//Render view list
function __renderData(data) {
    //CHECK HAVE LOGGED IN YET? ONLY AGEN WILL HAVE VALUE
    const levelAgen = getCookie(appShortName + 'MAIN_level') != '' ? getCookie(appShortName + 'MAIN_level') : '';
    const agentName = getCookie(appShortName + 'MAIN_fullname') != '' ? getCookie(appShortName + 'MAIN_fullname') : '';

    var listData = ``;
    $.each(data, function (index, key) {
        let additionalInfo = `<p><i class="fa fa-money mr-1"></i>${key.fee}%</p>`;

        let address = `<br>`
        if (levelAgen == 'agen' && key.agent_name == agentName) {
            address = `<p class="mt-1 text-teal-400">
                            <small> [${key.unit_number} | ${key.area_name} | ${key.city_name}] </small>
                        </p>`
			
			additionalInfo += `
			<p><i class="fa fa-user-secret mr-1"></i>Owner : ${key.owner_name}</p>`;
        }
        /******************************* TERSEWAA / TERJUAL ************************************************/
		let sale_type = key.sale_type == "Sewa" ? '<span class="badge badge-info">Sewa</span>' : '<span class="badge badge-success">Jual</span>';
		if(key.sale_status == 1){
			sale_type = key.sale_type == "Sewa" ? '<span class="badge badge-danger text-white">Disewa</span>' : '<span class="badge badge-danger text-white">Terjual</span>';
		}
        listData += `<div class="col-lg-3 col-md-3 col-sm-4 mt-40">
					<div class="single-product-wrap">
						<div class="product_desc">
							<div class="product_desc_info">
								<div class="product-review">
									<h5 class="manufacturer">
										<a href="#">${key.asset_category_name}</a>
									</h5>
									<div class="rating-box">
										<ul class="rating">
											${sale_type}
										</ul>
									</div>
								</div>
								<h4><a class="product_name" href="#">${key.property_title}</a></h4>
								${address}
								<p><i class="fa fa-bed mr-1"></i>${key.bedroom} Kamar Tidur</p>
								<p><i class="fa fa-bath mr-1"></i>${key.bathroom} Kamar Mandi</p>
								<p><i class="fa fa-address-card mr-1"></i>${key.agent_name}</p>
								<p><i class="fa fa-arrows mr-1"></i>LT ${numberWithCommas(key.land_area)} m<sup>2</sup> | LB ${numberWithCommas(key.building_area)} m<sup>2</sup></p>
                                ${additionalInfo}
								<div>
									<span class="new-price">Rp. ${numberWithCommas(key.price)}</span>
								</div>
							</div>
							<div class="add-actions">
								<ul class="add-actions-link">
									<li class="add-cart active" style="width: 100%;"><a href="javascript:void(0)"><small>Info Lanjutan Hubungi Agen</small></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>`
    })
    $('#property-list').html(listData)
}


//Render view list
function __renderDataFilter(data) {
    //CHECK HAVE LOGGED IN YET? ONLY AGEN WILL HAVE VALUE
    const levelAgen = getCookie(appShortName+'MAIN_level') != '' ? getCookie(appShortName+'MAIN_level') : '';
    const agentName = getCookie(appShortName+'MAIN_fullname') != '' ? getCookie(appShortName+'MAIN_fullname') : '';
        
    var listData = ``;
    $.each(data, function (index, key) {
        let additionalInfo = `<p><i class="fa fa-money mr-1"></i>${key.fee}%</p>`;
        let address = `<br>`
        if (levelAgen == 'agen' && key.agent_name == agentName) {
            address = `<p class="mt-1 text-teal-400">
                            <small> [${key.unit_number} | ${key.area_name} | ${key.city_name}] </small>
                        </p>`
			
			additionalInfo += `
			<p><i class="fa fa-user-secret mr-1"></i>Owner : ${key.owner_name}</p>`;
        }
        listData += `<div class="col-lg-3 col-md-3 col-sm-4 mt-40">
					<div class="single-product-wrap">
						<div class="product_desc">
							<div class="product_desc_info">
								<div class="product-review">
									<h5 class="manufacturer">
										<a href="#">${key.asset_category_name}</a>
									</h5>
									<div class="rating-box">
										<ul class="rating">
											${key.sale_type == 1 ? '<span class="badge badge-info">Sewa</span>' : '<span class="badge badge-warning">Jual</span>'}
										</ul>
									</div>
								</div>
								<h4><a class="product_name" href="#">${key.property_title}</a></h4>
								${address}
								<p><i class="fa fa-bed mr-1"></i>${key.bedroom} Kamar Tidur</p>
								<p><i class="fa fa-bath mr-1"></i>${key.bathroom} Kamar Mandi</p>
								<p><i class="fa fa-address-card mr-1"></i>${key.agent_name}</p>
								<p><i class="fa fa-arrows mr-1"></i>LT ${numberWithCommas(key.land_area)} m<sup>2</sup> | LB ${numberWithCommas(key.building_area)} m<sup>2</sup></p>
                                ${additionalInfo}
								<div>
									<span class="new-price">Rp. ${numberWithCommas(key.price)}</span>
								</div>
							</div>
							<div class="add-actions">
								<ul class="add-actions-link">
									<li class="add-cart active" style="width: 100%;"><a href="javascript:void(0)"><small>Info Lanjutan Hubungi Agen</small></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>`
    })
    $('#property-list').html(listData)
}