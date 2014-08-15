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