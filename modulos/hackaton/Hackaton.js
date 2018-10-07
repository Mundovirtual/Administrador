 
/*Registrar Hackaton*/
jQuery(document).on('submit', "#ModalRegistroHackaton", function(event){ 
	event.preventDefault(); 
     var datos=$("#ModalRegistroHackaton").serialize();
     alert(datos);
     console.log(datos);
	 jQuery.ajax({
		url: '../Modulos/hackaton/Hackaton.php',
		type: 'POST',
		dataType: 'json',
		data: datos,
		beforeSend:function(){
			  
		}
	})
	.done(function(respuesta) {
		console.log(respuesta.Estado);
	})
	.fail(function(  responseText) {
        console.log(responseText.responseText); 
         
	})
	.always(function() {
		console.log("complete");
	});
});      

 /*actualizar Hackaton*/
 let actualizar="";
function ActualizarHackaton(idd,Edicion,IH,FlP,TH,Imagen){  
	actualizar =idd;
	$("#EditarNombreHack").val(Edicion);
	$("#EditarInicioHack").val(IH);
	$("#EditarEntregaProyectos").val(FlP);
	$("#EditarFinHack").val(TH);
	$("#EditarImagenPrincipal").val(Imagen);
}

function UpdateHackaton() {
	  
		var EhN=$("#EditarNombreHack").val();
		var EhI=$("#EditarInicioHack").val();
		var EhE=$("#EditarEntregaProyectos").val();
		var EhF=$("#EditarFinHack").val(); 
		var EhImg=$("#EditarImagenPrincipal").val();
	 
	jQuery.ajax({
		url:'../Modulos/hackaton/Hackaton.php',
		type: 'POST',
		dataType: 'json',
		data: {'idAc':actualizar,'EhN':EhN,'EhI':EhI,'EhE':EhE,'EhF':EhF,'EhImg':EhImg},
		beforeSend:function(){ 
			  
		}
	})
	.done(function(respuesta) {
		console.log(respuesta.Estado);
	})
	.fail(function(  responseText) {
        console.log(responseText.responseText); 
         
	})
	.always(function() {
		console.log("complete");
	});
	event.preventDefault();
}
let eliminar="";

function eliminarVertical(id){ 
	eliminar=id;
}
  
 $(document).ready(function(){
	$("#EliminarVer").click(function () { 

	 	jQuery.ajax({
		url: '../Modulos/vertical/FuncionesVertical.php',
		type: 'POST',
		dataType: 'json',
		data: {'IdEliminar':eliminar},
		beforeSend:function(){
			  $('#EliminarVertical').modal('hide');
		}
		})
		.done(function(respuesta) {
			$('#EliminarV').modal('hide');
			console.log(respuesta.Estado);
		})
		.fail(function(  responseText) {
	        console.log(responseText.responseText); 
	         
		})
		.always(function() {
			console.log("complete");
		});
	});		
});    
 