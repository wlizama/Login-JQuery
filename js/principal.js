
$(document).ready(function(){
	cargarControles();
});


function cargarLogin(){

	$("div#frmLogin").dialog({

		autoOpen : false,
		modal    : true,
		show     : "blind",
		hide     : "explode",
		width    : 350,
		buttons  : {
			"Iniciar Sesion": function(){
				//$(this).dialog('close');
				$("form#frmLogeo").submit();
			}
		}
	});

	$("div#frmLogin").dialog('open');

}

function cargarControles(){
	$("button").button();
	cargarLogin();
	$("button#btnIngresar").click(function(){
		$("div#frmLogin").dialog('open');
	});
}