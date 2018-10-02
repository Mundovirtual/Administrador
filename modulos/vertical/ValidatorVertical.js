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


var idd=null;
function ActualizarVertical(id,Nv,Dv,Av,Ev){  
	idd=id; 
	$("#eNv").val(Nv);
	$("#eDv").val(Dv);
	$("#eAv").val(Av);
	$("#eHv").val(Ev); 
}
 





 











 


  
 