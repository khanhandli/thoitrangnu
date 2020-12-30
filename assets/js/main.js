
document.addEventListener("DOMContentLoaded",function() {
	var donu = document.getElementById('donu');
	var form = document.getElementsByClassName('form')[0];
	donu.onclick = function() {
		form.classList.add('form-click');
	}
},false)