function getFileName() {
	var url = document.location.href;
	url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));
	url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));
	url = url.substring(url.lastIndexOf("/") + 1, url.length);
	return url;
}

function toggleClouds() {
	$("#background-wrap").toggle();
}

$(document).ready(function(){
	var url = getFileName();
	$('a[href="/'+url+'"]').attr("id","current");
	$("footer a").hover(function() {
			$("#background-wrap").show();
		},function() {
			$("#background-wrap").hide();
		});	
});