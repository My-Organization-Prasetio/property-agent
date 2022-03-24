var _initTableProperty = function (className) {
	// Initialize
	$("." + className).DataTable({
		autoWidth: false,
		columnDefs: [
			{
				width: 30,
				targets: 0,
			},
			{
				visible: false,
				targets: 1,
			},
			{
				orderable: false,
				width: 120,
				targets: 7,
			},
			{
				width: "15%",
				targets: [4, 5],
			},
			{
				width: "15%",
				targets: 6,
			},
			{
				width: "15%",
				targets: 3,
			},
		],
		order: [[0, "asc"]],
		dom: '<"datatable-header"fl><"datatable-scroll-lg"t><"datatable-footer"ip>',
		language: {
			search: "<span>Filter:</span> _INPUT_",
			searchPlaceholder: "Type to filter...",
			lengthMenu: "<span>Show:</span> _MENU_",
			paginate: {
				first: "First",
				last: "Last",
				next: $("html").attr("dir") == "rtl" ? "&larr;" : "&rarr;",
				previous: $("html").attr("dir") == "rtl" ? "&rarr;" : "&larr;",
			},
		},
		lengthMenu: [25, 50, 75, 100],
		displayLength: 12,
		drawCallback: function (settings) {
			var api = this.api();
			var rows = api.rows({ page: "current" }).nodes();
			var last = null;

			api
				.column(1, { page: "current" })
				.data()
				.each(function (group, i) {
					if (last !== group) {
						$(rows)
							.eq(i)
							.before(
								'<tr class="table-active table-border-double"><td colspan="8" class="font-weight-semibold">' +
									group +
									"</td></tr>"
							);

						last = group;
					}
				});

			// Initializw Select2
			if (!$().select2) {
				console.warn("Warning - select2.min.js is not loaded.");
				return;
			}
			$(".form-control-select2").select2({
				width: 150,
				minimumResultsForSearch: Infinity,
			});
		},
	});
};

export function _uniform() {
	var _componentUniform = function () {
		if (!$().uniform) {
			console.warn("Warning - uniform.min.js is not loaded.");
			return;
		}

		// Default initialization
		$(".form-check-input-styled").uniform();

		//
		// Contextual colors
		//

		// Primary
		$(".form-check-input-styled-primary").uniform({
			wrapperClass: "border-primary-600 text-primary-800",
		});

		// Danger
		$(".form-check-input-styled-danger").uniform({
			wrapperClass: "border-danger-600 text-danger-800",
		});

		// Success
		$(".form-check-input-styled-success").uniform({
			wrapperClass: "border-success-600 text-success-800",
		});

		// Warning
		$(".form-check-input-styled-warning").uniform({
			wrapperClass: "border-warning-600 text-warning-800",
		});

		// Info
		$(".form-check-input-styled-info").uniform({
			wrapperClass: "border-info-600 text-info-800",
		});

		// Custom color
		$(".form-check-input-styled-custom").uniform({
			wrapperClass: "border-indigo-600 text-indigo-800",
		});
	};
}

export function viewAllProperty() {
	$.ajax({
		url: rootApp + "api/property",
		type: "GET",
		dataType: "json",
		success: function (res) {
			var tbProperty = "";
			$.each(res.data, function (index, key) {
				tbProperty += `<tr>
                    <td>${index + 1}</td>
                    <td>${key.asset_category_name}</td>
                    <td>
						<h6 class="mb-0">
							<a href="#">${key.property_title}</a>
							<span class="d-block font-size-sm text-muted">Jenis ID: ${key.property_description}</span>
						</h6>
                    </td>
                    <td>
                        <h6 class="mb-0">
                            <a href="#">${key.owner_name}</a>
                        </h6>
                    </td>
                    <td>
						<h6 class="mb-0">
							<a href="#">${key.area_name}</a>
							<span class="d-block font-size-sm text-muted">Jenis ID: ${key.city_name}</span>
						</h6>
                    </td>
                    <td>
                        Rp_ ${key.price}
                    </td>
                    <td>
                        ${key.agent_name}
                    </td>
                    <td class="text-center">
                        <div class="list-icons list-icons-extended">
                            <div class="list-icons-item dropdown">
                                <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item btn-edit" data-id="${
																			key.property_id
																		}"><i class="icon-file-plus"></i> Perbarui</a>
                                    <a href="#" class="dropdown-item btn-delete" data-id="${
																			key.property_id
																		}"><i class="icon-cross2"></i> Hapus</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>`;
			});
			// return tbProperty;
			if ($(".table-property").length > 0) {
				$(".table-property").dataTable().fnDestroy();
				if ($("#table-body-property").length > 0) {
					$("#table-body-property").html(tbProperty);
				}
				_initTableProperty("table-property");
			}
		},
		error: function (request, error) {
			// console.log("Request: " + JSON.stringify(request));
		},
	});
}


export function countProperty() {
	$.ajax({
		url: rootApp + "api/property/count-property",
		type: "GET",
		dataType: "json",
		success: function (res) {
			$('.total-property').html(numberWithCommas(res.data.all_property))
			$('.property-sold').html(numberWithCommas(res.data.sold_property))
			$('.property-available').html(numberWithCommas(res.data.available_property))
		},
		error: function (request, error) {
			// console.log("Request: " + JSON.stringify(request));
		},
	});
}