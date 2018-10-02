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


 let actualizar="";
function ActualizarVertical(idd,Nv,Dv,Av,Ev){ 
	actualizar =idd;
	$("#eNv").val(Nv);
	$("#eDv").val(Dv);
	$("#eAv").val(Av);
	$("#eHv").val(Ev); 
}

function UpdateVertical() {
	 event.preventDefault(); 

		var eNv=$("#eNv").val();
		var eDv=$("#eDv").val();
		var eAv=$("#eAv").val();
		var eHv=$("#eHv").val(); 
	jQuery.ajax({
		url: '../Modulos/vertical/FuncionesVertical.php',
		type: 'POST',
		dataType: 'json',
		data: {'idAc':actualizar,'eNv':eNv,'eDv':eDv,'eAv':eAv,'eHv':eHv},
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
}

 $(document).ready(function(){
	$("#EliminarVer").click(function () {  
		let idEliminar=idE;
	 	jQuery.ajax({
		url: '../Modulos/vertical/FuncionesVertical.php',
		type: 'POST',
		dataType: 'json',
		data: {'IdEliminar':idEliminar},
		beforeSend:function(){
			 alert("hola "+idEliminar);
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
});





 











 


  
 