function teleport() {
	window.location.href = "principal.html";
}

function cambioLogo() {
	var nav = document.getElementById('img_logo');
	var img = document.createElement('img');
	img.src = "../images/logo/beholder" + Math.round((Math.random() * 3) + 1) + ".png";
	img.height = "120";
	nav.appendChild(img);
}

function getCookie(name) {
	var dc = document.cookie;
	var prefix = name + "=";
	var begin = dc.indexOf("; " + prefix);
	if (begin == -1) {
		begin = dc.indexOf(prefix);
		if (begin != 0) return null;
	}
	else {
		begin += 2;
		var end = document.cookie.indexOf(";", begin);
		if (end == -1) {
			end = dc.length;
		}
	}

	return decodeURI(dc.substring(begin + prefix.length, end));
} 

/*
function checkReg() {
    var myCookie = getCookie("Logged");
	var reg = document.getElementsByName("reg")

	if (myCookie == "true") {
		reg[0].textContent = "Login";
    }
} 
*/