const c_name = "userIsRegistered";
const pathname = window.location.pathname;


function cambioLogo() {
	var nav = document.getElementById('img_logo');
	var img = document.createElement('img');
	document.getElementById('user').hidden = true;
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
	/*if (userName == "" || userEmail == "" || userPassword == "") {
		Swal.fire({
			position: 'top-end',
			icon: 'error',
			title: 'rellene todos los campos',
			showConfirmButton: false,
			timer: 1200
		})
	}else{
	*/
	$.ajax({
		type: 'POST',
		dataType: 'json',
		url: '',
		data: userData,
		success: function (msg) {
			if (msg) {
				createCookie();
				Swal.fire({
					position: 'top-end',
					icon: 'success',
					title: "Bienvenido " + userName,
					showConfirmButton: false,
					timer: 1200,
				}).then(function () {
					window.location.href = "../html/usuario.html";
				})
			} else {
				alert("Cannot add to list !");
			}
		},
		data: userData
	});
}

function createCookie() {
	let cvalue = true;
	let exdays = 2;
	const d = new Date();
	d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
	let expires = "expires=" + d.toUTCString();
	document.cookie = c_name + "=" + cvalue + ";" + expires + ";path=/";
	document.cookie = "penis" + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie() {
	let name = c_name + "=";
	let ca = document.cookie.split(';');
	let x = true;

	for (let i = 0; i < ca.length; i++) {
		let c = ca[i].trim();

		if (c.includes(name) && c.substring(name.length) === "true") {
			document.getElementById('reg').hidden = true;
			document.getElementById('log').hidden = true;
			document.getElementById('user').hidden = false;
			break;
		} else {
			x = false;
			detectUrl(x);
		}
	}

	return "";
}

function detectUrl(x) {
	let cookValue = x;
	if (pathname.includes("usuario") && cookValue == false) {
		window.stop();
		Swal.fire({
			position: 'top-end',
			icon: 'error',
			title: "Error ",
			text: "No tiene permisos para ver esta pagina",
			showConfirmButton: false,
			timer: 1200,
		}).then(function () {
			window.location.href = "../html/principal.html";
		})
	}
}
