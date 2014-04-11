$(document).ready(function(){
    $("#signIn").click(function(){
        var user = $("#txt-username").val();
        var pass = $("#txt-password").val();
        if (user == ""){
            $("#respuesta").html("Ingrese nombre de usuario.");
            $("#respuesta-login").fadeIn("slow");
            return;
        }
        if (pass == ""){
            $("#respuesta").html("Ingrese contraseña.");
            $("#respuesta-login").fadeIn("slow");
            return;
        }
        $.ajax
	({
		type: "POST",
		async: false,
		url: "controlador/controladorInicioSesion.php",
		data:"user="+user+"&pass="+pass+"&caso=1",
		dataType: "html",
		success: function(respuesta)
		{
                    if (respuesta > 0){
                        window.location.href = 'home/index.php';
                    }else{
                        $("#respuesta").html(respuesta);
                        $("#respuesta-login").fadeIn("slow");
                    }
		}
	});
    });
});

