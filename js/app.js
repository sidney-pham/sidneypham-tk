function getFileName() {
	var url = document.location.href;
	if (/\/$/.test(url)) url = url.slice(0,-1);
	url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));
	url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));
	url = url.substring(url.lastIndexOf("/") + 1, url.length);
	if (url == "") return "/"
	return url;
}

function toggleClouds() {
	$("#background-wrap").toggle();
}

$(document).ready(function(){
	var url = getFileName();
	console.log(url);
	$('a[href="/'+url+'"]').attr("id","current");
	console.log("a[href='/"+url+'"]');
	$("footer a").hover(function() {
			$("#background-wrap").show();
		},function() {
			$("#background-wrap").hide();
		});	
});

