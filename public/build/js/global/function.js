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
    $('input[numbering="'+groupNumber+'"][name="'+e.name+'"]').val(fra+numberWithCommas(number));
    $('input[numbering="'+groupNumber+'"][name="'+nameTarget+'"]').val(number);
}
