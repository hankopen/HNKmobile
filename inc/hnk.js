document.addEventListener("offline", offlineTodo, false);
document.addEventListener("online", onlineTodo, false);
function offlineTodo() {
	alert('You are currently offline, this service require a working Internet connection.');
	$("#content").parent().hide();
}	
function onlineTodo() {
	$("#content").parent().show();
}
function enableDiv(divid) {
	$(divid).parent().show();
}

function translateText(text) {
	var lang = localStorage["lang"];
	var t = text.split('[:]', 2);
	if(lang == 'fr') { return t[1];
	} else {  
		return t[0];
	}
}