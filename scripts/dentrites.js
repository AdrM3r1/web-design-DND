const c_name_base = "userIsRegistered";
const c_user = "nick";
const pathname = window.location.pathname;


function cambioLogo() {
	var nav = document.getElementById('img_logo');
	var img = document.createElement('img');
	document.getElementById('user').hidden = true;
	document.getElementById('logout').hidden = true;
	if (window.screen.width > 720) {
		img.src = "../images/logo/beholder" + Math.round((Math.random() * 6) + 1) + ".png";
		nav.appendChild(img);
	}
}

function checkForm() {
	var userName = document.getElementById("userName").value;
	var userEmail = document.getElementById("userEmail").value;
	var userPassword = document.getElementById("userPassword").value;
	if (userName == "" && userEmail == "" && userPassword == "") {
		Swal.fire({
			position: 'top-end',
			icon: 'error',
			title: 'rellene todos los campos',
			showConfirmButton: false,
			timer: 1200

		}).then(function () {
			window.stop();
		})
	}
}

function createCookie() {
	let cvalue = true;
	let exdays = 1;
	const d = new Date();
	d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
	let expires = "expires=" + d.toUTCString();
	document.cookie = c_name_base + "=" + cvalue + ";" + expires + ";path=/";

}

function getCookie() {
	let name = c_name_base + "=";
	let ca = document.cookie.split(';');
	let x = true;

	for (let i = 0; i < ca.length; i++) {
		let c = ca[i].trim();

		if (c.includes(name) && c.substring(name.length) === "true") {
			document.getElementById('reg').hidden = true;
			document.getElementById('log').hidden = true;
			document.getElementById('user').hidden = false;
			document.getElementById('logout').hidden = false;
			break;
		} else {
			x = false;
		}
	}
	detectUrl(x)
	return "";
}

function logOut() {
	let name = c_name_base + "=";
	let ca = document.cookie.split(';');
	let x = true;

	for (let i = 0; i < ca.length; i++) {
		let c = ca[i].trim();

		if (c.includes(name) && c.substring(name.length) === "true") {
			document.getElementById('reg').hidden = false;
			document.getElementById('log').hidden = false;
			document.getElementById('user').hidden = true;
			document.getElementById('logout').hidden = true;
			document.cookie = c_name_base + "=" + true + ";" + "expires=Thu, 01 Jan 1970 00:00:00 GMT" + ";path=/";
			document.cookie = c_user + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';

			Swal.fire({
				position: 'center',
				icon: 'success',
				title: "Logout ",
				text: "Nos vemos pronto",
				showConfirmButton: false,
				timer: 1500,
			}).then(function () {
				window.location.href = "../html/principal.html";
			})
		}
	}
}



function detectUrl(x) {
	let cookValue = x;
	let name = c_user + "=";
	let ca = document.cookie.split(';');

	for (let i = 0; i < ca.length; i++) {
		let c = ca[i].trim();
		if (!c.includes(name) && c.substring(name.length) == "" && pathname.includes("usuario") && cookValue != true) {
			window.stop();
			Swal.fire({
				position: 'center',
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
}
