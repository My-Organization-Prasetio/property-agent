export function viewAllMaterialRequest() {
    const id = $('#material_request_id').val();
	$.ajax({
		url: rootApp + "api/distribution/detail-by-request-id",
        type: "GET",
        data: {
            id: id,
        },
        dataType: "JSON",
		success: function (res) {
			//INITIALIZE VARIABLE & DATA
			const data = res.data;
			var groupCategory = [];
			//Grouping & Total
			var tbDistributionRequest = '';

			$.each(res.data, function (index, key) {
				if(!groupCategory.includes(key.category_name)){
					groupCategory.push(key.category_name);
					tbDistributionRequest += `<tr>
												<td colspan="5" class="font-weight-bolder text-secondary">${key.category_name}</td>
											</tr>`;
				}

				tbDistributionRequest +=
								`<tr>					
									<td>
										${index+1}
									</td>
                                    <td>
                                        <h6 class="mb-0">${key.product_name}</small></h6>
                                    </td>
                                    <td>${key.request_quantity}</td>
                                    <td>${key.product_unit}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-danger btn-sm btn-edit" data-id="${key.request_detail_id}"><i class="icon-trash mr-2"></i> Drop</button>
                                    </td>
                                </tr>`;
			});
            $("#tb-body-distribution-request").html(tbDistributionRequest);
		},
		error: function (request, error) {
			// console.log("Request: " + JSON.stringify(request));
		},
	});
}