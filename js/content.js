$(document).ready(function() {
	loadContent();
});

function loadContent()
{
	$.get("../php/content.php", {"page":"openWings"}, function(data) {
			$("#title").text(data.title);
			$("#content").text(data.content);
			console.log(data.title);
			console.log(data.content);
	}, "json");
}
