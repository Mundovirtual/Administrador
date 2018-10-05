 
/*Registrar Verticales*/
jQuery(document).on('submit', "#RV", function(event){
	event.preventDefault(); 
     var datos=$(this).serialize();

	jQuery.ajax({
		url: '../Modulos/vertical/FuncionesVertical.php',
		type: 'POST',
		dataType: 'json',
		data: datos,
		beforeSend:function(){
			 $('#ModalVertical').modal('hide');
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

/*actualizar Verticales*/
 let actualizar="";
function ActualizarVertical(idd,Nv,Dv,Av,Ev){  
	actualizar =idd;
	$("#eNv").val(Nv);
	$("#eDv").val(Dv);
	$("#eAv").val(Av);
	$("#eHv").val(Ev); 
}

function UpdateVertical() {
	 

		var eNv=$("#eNv").val();
		var eDv=$("#eDv").val();
		var eAv=$("#eAv").val();
		var eHv=$("#eHv").val(); 
	 event.preventDefault();
	jQuery.ajax({
		url: '../Modulos/vertical/FuncionesVertical.php',
		type: 'POST',
		dataType: 'json',
		data: {'idAc':actualizar,'eNv':eNv,'eDv':eDv,'eAv':eAv,'eHv':eHv},
		beforeSend:function(){ 
			 $('#editarVertical').modal('hide');
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
}
let eliminar="";

function eliminarVertical(id){
	eliminar=id;
}
  
 $(document).ready(function(){
	$("#EliminarVer").click(function () {
		alert(eliminar) ;  
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
 