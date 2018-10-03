function openNav(id) {
    document.getElementById(id).style.width = "250px";
}

function closeNav(id) {
    document.getElementById(id).style.width = "0";
}
function makeGone(category) {
	var query = '.postCard:not(.' + category + ')';
	var e = document.querySelectorAll(query);
	console.log(e);
	for(var i=0;i<e.length;i++) {
		e[i].style.minHeight = 0;
		e[i].style.marginTop = 0;
		e[i].style.opacity = 0;
		for(var h=0;h<e[i].querySelectorAll('*').length;h++) {
			e[i].querySelectorAll('*')[h].style.display = 'none';
		}
	}		
}

function showAllPost() {
	var e = document.getElementsByClassName('postCard');
	for(var i=0;i<e.length;i++) {
		e[i].style = null;
		for(var h=0;h<e[i].querySelectorAll('*').length;h++) {
			e[i].querySelectorAll('*')[h].style.display = 'block';
		}
	}		
}

function dropDown(category) {
   	var e = document.getElementById(category);
   	if(e.style.height == '')
   	   e.style.height = 'auto';
   	else
   	   e.style.height = '';
}