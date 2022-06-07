
$(document).mouseup(function (e) {
    var container = $(".suggest-container");
    $("#instant-results").removeClass("active");
});

/*****************************************************************/
/*              SEARCH RECOMENDATION                            */
/***************************************************************/
const searchWrapper = document.querySelector(".hm-searchbox");
const inputBox = searchWrapper.querySelector("input");
const suggestBox = searchWrapper.querySelector(".instant-results");
let userData = ``;

//if user press any key an realese
inputBox.onkeyup = (e) => {
    if(userData != e.target.value){
        userData = e.target.value; //user entered data
        //Active result box
        $("#instant-results").addClass("active");
        if (!userData) {
            $("#instant-results").removeClass("active");
        }
        
        const vcategory = typeof propertyCategory === 'undefined' || propertyCategory === null ? '' : propertyCategory;
        const vsaleType = typeof saleType === 'undefined' || saleType === null ? '' : saleType;
        const vTag = typeof tag === 'undefined' || tag === null ? '' : tag;
        const agentName = getCookie(appShortName+'MAIN_fullname') != '' ? getCookie(appShortName+'MAIN_fullname') : '';
    
        $.ajax({
            url: rootApp + "api/property/recomendation-by-agent",
            type: "POST",
            data: {
                keywords: userData,
                cities: $('#form-search-cities').val(),
                category: vcategory,
                sale_type: vsaleType,
                tag: vTag,
                agent_name:agentName
            },
            dataType: "json",
            success: function (res) {
                var recomendationList = ``;
                $.each(res.data, function (index, key) {
                    recomendationList += `<div class="list rounded">
                    <a href="${rootApp + "home/property/" + key.property_id}">
                            <div class="title">${key.property_title}</div>
                            <div class="description">${key.unit_number} | ${key.area_name} | ${key.address}</div>
                        </a>
                    </div>`
                })
                $('#list-recomendation').html(recomendationList)
            },
            error: function (request, error) {
                // console.log("Request: " + JSON.stringify(request));
            },
        });
    }
}

/*****************************************************************/
/*                      SEARCH PROPERTY                         */
/***************************************************************/
$( "#form-search" ).submit(function( event ) {
    event.preventDefault();
    searchPage()
    $("#instant-results").removeClass("active");
});


//Get data
function searchProperty(page = 1) {
    const vcategory = typeof propertyCategory === 'undefined' || propertyCategory === null ? '' : propertyCategory;
    const vsaleType = typeof saleType === 'undefined' || saleType === null ? '' : saleType;
    const vTag = typeof tag === 'undefined' || tag === null ? '' : tag;
    const agentName = getCookie(appShortName+'MAIN_fullname') != '' ? getCookie(appShortName+'MAIN_fullname') : '';
    
    $.ajax({
        url: rootApp + "api/property/recomendation-by-agent/"+page,
        type: "POST",
        data: {
            keywords: $('#form-search-input').val(),
            cities: $('#form-search-cities').val(),
            category: vcategory,
            sale_type: vsaleType,
            tag: vTag,
            agent_name:agentName
        },
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

//Pagination
var current_page = 1;
var total_rows = 0;

function prevPageSearch() {
    if (current_page > 1) {
        current_page--;
        searchPage(current_page);
    }
}

function nextPageSearch() {
    if (current_page < total_rows) {
        current_page++;
        searchPage(current_page);
    }
}

function searchPage(page = 1) {
    searchProperty(page)
}

function createLink(page = 1, totalRows = 1, perPage = 1) {
    var linkCollection = ``
    var numPagesCollection = Math.ceil(totalRows / perPage)

    //Push Previous button
    if (page != 1) {
        linkCollection += `<li><a href="javascript:prevPageSearch()" id="btn_prev" class="Previous"><i class="fa fa-chevron-left"></i> Sebelumnya</a></li>`
    } else {
        linkCollection += `<li><a href="javascript:void(0)" id="btn_prev" class="text-secondary"><i class="fa fa-chevron-left"></i> Sebelumnya</a></li>`
    }

    //Push target page link when the value is less than current page
    var min = 1;
    for (var i = page - 3; i <= page; i++) {
        if (i >= 1 && i != page) {
            // linkCollection += `<a href="javascript:searchPage(${i})" id="btn_prev">${i}</a>`
            linkCollection += `<li><a href="javascript:searchPage(${i})"">${i}</a></li>`
        }
    }

    //Push target page link for the current page
    linkCollection += `<li class="active"><a href="javascript:searchPage(${page})"">${page}</a></li>`

    //Push target page link when the value is more than current page
    var min = 1;
    for (var i = page; i <= parseInt(page) + 2; i++) {
        if (i <= numPagesCollection && i != page) {
            linkCollection += `<li><a href="javascript:searchPage(${i})"">${i}</a></li>`
        }
    }

    //Push Next button
    if (page != numPagesCollection) {
        linkCollection += `<li><a href="javascript:nextPageSearch()" id="btn_next" class="Next"> Next <i class="fa fa-chevron-right"></i></a></li>`
    } else {
        linkCollection += `<li><a href="javascript:void(0)" id="btn_next" class="text-secondary"> Next <i class="fa fa-chevron-right"></i></a></li>`
    }

    return linkCollection
}