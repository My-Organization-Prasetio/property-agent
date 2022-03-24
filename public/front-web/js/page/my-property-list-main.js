//CHECK HAVE LOGGED IN YET? ONLY AGEN WILL HAVE VALUE
const levelAgen = getCookie(appShortName+'MAIN_level') != '' ? getCookie(appShortName+'MAIN_level') : '';
const agentName = getCookie(appShortName+'MAIN_fullname') != '' ? getCookie(appShortName+'MAIN_fullname') : '';
$(document).ready(function (e) {

    if(levelAgen == 'agen'){
        searchMyProperty()
    }
});

//Get data
function searchMyProperty(page = 1) {
    $.ajax({
        url: rootApp + "api/property/by-agent/" + page,
        type: "GET",
        data: {
            agent_name : agentName
        },
        success: function (res) {
            $('#title-property-list-rc').html(`Daftar Properti Saya<span class="cart-item-count">${res.total}</span>`);

            let myList = ``;
            $.each(res.data, function (index, key) {
                myList += `<li>
                            <div class="minicart-product-details">
                                <h6><a href="${rootApp}home/property/${key.property_id}">${key.property_title}</a></h6>
                                <span class="text-secondary"><small>${key.area_name} | ${key.city_name}</small></span>
                            </div>
                        </li>`;
                //Maximum list of my property
                if(index+1==5){
                    return false;
                }
            })
            $('#my-property-list-rc').html(myList)

            $('#show-more-my-property-rc').html(`<a href="${rootApp}home/my-property" class="li-button li-button-fullwidth li-button-dark">
                                            <span>Lihat Semua</span>
                                        </a>`)

        },
        error: function (request, error) {
            // console.log("Request: " + JSON.stringify(request));
        },
    });
}