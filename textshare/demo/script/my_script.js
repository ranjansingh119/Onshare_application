$("#sub").click( function(){

var d = $("#form1").serializeArray();

$.post($("#form1").attr("action"), d, function(info){ $("#result").html(info); });


  clearinput();
} );


$("#form1").submit(function(){

  return false;
 }

);


function clearinput(){

 $("#form1").each(function(){

 	$(this).val('');
 });
}