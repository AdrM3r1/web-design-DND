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
				alert("Somebody" + userName + " was added in list !");
				location.reload(true);
			} else {
				alert("Cannot add to list !");
			}
		},
		data: userData
	});
}


function createCookie(name, value, days) {
	var name = 'registered';
	var value = true;
	var days = 2;
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

function getCookie() {
	var c_name = 'registered';
	var c_value = true;
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1;
            c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = document.cookie.length;
            }
			if(c_value == true){
				document.getElementById('reg').hidden = true
			}
            return unescape(document.cookie.substring(c_start, c_end));
        }
    }
    return "";
}