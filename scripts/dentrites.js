const c_name = "userIsRegistered";
var c_value = false;
const pathname = window.location.pathname;


function cambioLogo() {
	var nav = document.getElementById('img_logo');
	var img = document.createElement('img');
	document.getElementById('user').hidden = true;
	if (window.screen.width > 720) {
		img.src = "../images/logo/beholder" + Math.round((Math.random() * 6) + 1) + ".png";
		nav.appendChild(img);
	}
	getCookie();
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
					title: "Bienvenido " +userName,
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


function createCookie(c_name, c_value, days) {
	var days = 1;
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
	this.c_value = true;
    document.cookie = c_name + "=" + c_value + expires + "; path=/";
}

function getCookie() {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1;
            c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = document.cookie.length;
            }
			if(this.c_value == true){
				document.getElementById('reg').hidden = true;
				document.getElementById('log').hidden = true;
				document.getElementById('user').hidden = false;
			}
            return unescape(document.cookie.substring(c_start, c_end));
        }
    }
    return "";
}

function detectUrl(){
	if (pathname.includes("usuario") && this.c_value == false){
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
