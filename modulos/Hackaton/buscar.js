$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url: '../modulos/Hackaton/buscar.php',
		type:'post',
		data: {consulta: consulta},
        success:function(respuesta){
		 	$(".visualizar").html(respuesta);
	     }
	});
}


$(document).on('keyup','#caja_busqueda', function(){
	var valor = $(this).val();
	if (valor != "") {
		buscar_datos(valor);
	}else{
		buscar_datos();
	}
});