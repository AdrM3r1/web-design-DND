function cambioLogo() {
	var nav = document.getElementById('img_logo');
	var img = document.createElement('img');
	if (window.screen.width > 720) {
		img.src = "../images/logo/beholder" + Math.round((Math.random() * 6) + 1) + ".png";
		nav.appendChild(img);
	}
}

function ajaxCall() {
	let userName = document.getElementById("userName").value;
	let userEmail = document.getElementById("userEmail").value;
	let userPassword = document.getElementById("userPassword").value;
	let userData = { 'nick': userName, 'email': userEmail, 'password': userPassword }

	if (userName || userEmail || userPassword == '') {
		Swal.fire({
			position: 'top-end',
			icon: 'error',
			title: 'rellene todos los campos',
			showConfirmButton: false,
			timer: 1200
		})
	}

	$.ajax({
		type: 'POST',
		dataType: 'json',
		url: 'newUserRegistered',
		data: userData,
		success: function (msg) {
			if (msg) {
				alert("Somebody" + userName + " was added in list !");
				location.reload(true);
			} else {
				alert("Cannot add to list !");
			}
		},
		data: userData
	});
}
