$(document).ready(function () {
	
	$.getJSON("/opt/lampp/htdocs/textshare/demo/fetch.php", function(data){

       $("ul").empty();

        $.each(data, function(key, value){

        	$("ul").append("<li>Name:" +value.name+"</li><li>Text_content:"+value.text_content+"</li></br>" );
        });

	});
});