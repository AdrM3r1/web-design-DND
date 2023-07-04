function teleport() {
	window.location.href = "../html/principal.html";
}

function cambioLogo() {
	var nav = document.getElementById('img_logo');
	var img = document.createElement('img');
	if(window.screen.width > 720){
		img.src = "../images/logo/beholder" + Math.round((Math.random() * 6) + 1) + ".png";
		nav.appendChild(img);
	}
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
