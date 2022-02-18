const searchWrapper = document.querySelector(".hm-searchbox");
const inputBox = searchWrapper.querySelector("input");
const suggestBox = searchWrapper.querySelector(".instant-results");

//if user press any key an realese
inputBox.onkeyup = (e) => {
    let userData = e.target.value; //user entered data
    // $("#instant-results").removeClass("nonactive");
    $("#instant-results").addClass("active");
    if (!userData) {
        $("#instant-results").removeClass("active");
    }
}

$(document).mouseup(function (e) {
    var container = $(".suggest-container");
    // $("#instant-results").addClass("nonactive");
    $("#instant-results").removeClass("active");
});