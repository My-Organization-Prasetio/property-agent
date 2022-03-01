//NUMBER WITH COMAS
function numberWithCommas(x) {
	return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
}

// NULL TO NUMBER
function null_tonumber(angka) {
	if (angka != null) {
		return angka;
	} else {
		return 0;
	}
}

function inputCurrency(e, groupNumber, nameTarget, fra) {
	const number = e.value.replace(/\D/g, '');
	$('input[numbering="' + groupNumber + '"][name="' + e.name + '"]').val(fra + numberWithCommas(number));
	$('input[numbering="' + groupNumber + '"][name="' + nameTarget + '"]').val(number);
}

function getCookie(cname) {
	let name = cname + "=";
	let decodedCookie = decodeURIComponent(document.cookie);
	let ca = decodedCookie.split(';');
	for (let i = 0; i < ca.length; i++) {
		let c = ca[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
			return c.substring(name.length, c.length);
		}
	}
	return "";
}

function setCookie(cname, cvalue, exdays) {
	const d = new Date();
	d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
	let expires = "expires=" + d.toUTCString();
	document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}