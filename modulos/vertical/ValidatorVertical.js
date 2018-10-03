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
 
$(document).ready(function() {			   
	$('#example').DataTable( {	
		"bDeferRender": true,			
		"sPaginationType": "full_numbers",
		"ajax": {
			"url": "funcionTraeUsuarios.php",
        	"type": "POST"
		},					
		"columns": [
			{ "data": "login" },
			{ "data": "password" },
			{ "data": "name" },
			{ "data": "type" },
			{ "data": "status" },
			{ "data": "acciones"}
			],
		"oLanguage": {
            "sProcessing":     "Procesando...",
		    "sLengthMenu": 'Mostrar <select>'+
		        '<option value="10">10</option>'+
		        '<option value="20">20</option>'+
		        '<option value="30">30</option>'+
		        '<option value="40">40</option>'+
		        '<option value="50">50</option>'+
		        '<option value="-1">All</option>'+
		        '</select> registros',    
		    "sZeroRecords":    "No se encontraron resultados",
		    "sEmptyTable":     "Ningún dato disponible en esta tabla",
		    "sInfo":           "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
		    "sInfoEmpty":      "Mostrando del 0 al 0 de un total de 0 registros",
		    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		    "sInfoPostFix":    "",
		    "sSearch":         "Filtrar:",
		    "sUrl":            "",
		    "sInfoThousands":  ",",
		    "sLoadingRecords": "Por favor espere - cargando...",
		    "oPaginate": {
		        "sFirst":    "Primero",
		        "sLast":     "Último",
		        "sNext":     "Siguiente",
		        "sPrevious": "Anterior"
		    },
		    "oAria": {
		        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		    }
        }
	});
});


 











 


  
 