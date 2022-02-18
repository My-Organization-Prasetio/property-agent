var _initTableOutlet = function (className) {
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
		displayLength: 25,
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

export function viewAllOutlet() {
	$.ajax({
		url: rootApp + "api/outlet",
		type: "GET",
		dataType: "json",
		success: function (res) {
			var tbOutletData = "";
			$.each(res.data, function (index, key) {
				tbOutletData += `<tr>
                    <td>${index + 1}</td>
                    <td>${key.branch_city}</td>
                    <td>${key.branch_name}</td>
                    <td>${key.branch_phone_number}</td>
                    <td>
                        <span class="d-block font-size-sm text-muted">${key.branch_address}</span>
                    </td>
                    <td>
                        <span class="d-block font-size-sm text-muted">${key.branch_city}</span>
                    </td>
                    <td>${key.branch_spv}</td>
                    <td class="text-center">
                        <div class="list-icons list-icons-extended">
                            <div class="list-icons-item dropdown">
                                <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item btn-edit" data-id="${key.branch_id}"><i class="icon-file-plus"></i> Edit</a>
                                    <a href="#" class="dropdown-item btn-delete" data-id="${key.branch_id}"><i class="icon-cross2"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>`;
			});

			if ($(".table-outlet").length > 0) {
				$(".table-outlet").dataTable().fnDestroy();
				if ($("#table-body-outlet").length > 0) {
					$("#table-body-outlet").html(tbOutletData);
				}
				_initTableOutlet("table-outlet");
			}
		},
		error: function (request, error) {
			// console.log("Request: " + JSON.stringify(request));
		},
	});
}