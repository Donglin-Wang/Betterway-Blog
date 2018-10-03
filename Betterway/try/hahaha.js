function makeGone(category) {
	var e = document.getElementsByClassName(category);
	for(var i=0;i<e.length;i++) {
		document.getElementById(id).style.minHeight = 0;
		document.getElementById(id).style.marginTop = 0;
		document.getElementById(id).style.opacity = 0;
		for(var h=0;h<e.querySelectorAll('*').length;h++) {
			e[i].querySelectorAll('*')[h].style.display = 'none';
		}
	}		
}

function makeGone(id) {
	document.getElementById(id).style.minHeight = 0;
	document.getElementById(id).style.marginTop = 0;
	for(var i=0;i<document.getElementById(id).querySelectorAll('*').length;i++) {
		document.getElementById(id).querySelectorAll('*')[i].style.display = "none";
	}
	document.getElementById(id).style.opacity = 0;
}