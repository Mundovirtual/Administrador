
/*Registrar Hackaton*/
jQuery(document).on('submit', "#ModalRegistroHackaton", function(event){ 
	event.preventDefault(); 
     var datos=$("#ModalRegistroHackaton").serialize();  
	 jQuery.ajax({
		url: '../Modulos/hackaton/Hackaton.php',
		type: 'POST',
		dataType: 'json',
		data: datos,
		beforeSend:function(){
			 
		}
	})
	.done(function(respuesta) {
		if (respuesta=='1') {
			$('#ModalHackaton').modal('show');
			alertify.set('notifier','position', 'top-right');
	 		alertify.error('Fecha limite de Registros no valido');
		} 
		else if(respuesta=='2'){
			$('#ModalHackaton').modal('show');
			alertify.set('notifier','position', 'top-right');
	 		alertify.error('Fecha limite de Registros no valido');
		}
		else if (respuesta=='3') {

			$('#ModalHackaton').modal('show');
			alertify.set('notifier','position', 'top-right');
	 		alertify.error('Fecha de Inicio del Hackaton no valido');

		} else if(respuesta=='0'){

			$('#ModalHackaton').modal('hide');
			alertify.set('notifier','position', 'top-right');
	 		alertify.success('Hackaton registrado');
	 		CargarTablaHack();	
		}
		else{

			$('#ModalHackaton').modal('hide');
			alertify.set('notifier','position', 'top-right');
	 		alertify.error('Error desconocido');
		}
	})
 
 
});      

 /*actualizar Hackaton*/
 let actualizar="";
function ActualizarHackaton(idd,Edicion,IH,FlP,TH/*,Imagen*/){  
	actualizar =idd; 
	$("#EditarNombreHack").val(Edicion);
	$("#EditarInicioHack").val(IH);
	$("#EditarEntregaProyectos").val(FlP);
	$("#EditarFinHack").val(TH);
	/*$("#EditarImagenPrincipal").val(Imagen);*/
}
 
function ActualizandoHackaton() { 
	 
	var EhN="";
	var EhI="";
	var EhE="";
	var EhF="";

	EhN=$("#EditarNombreHack").val();
	EhI=$("#EditarInicioHack").val();
	EhE=$("#EditarEntregaProyectos").val();
	EhF=$("#EditarFinHack").val();  
	/*var EhImg=$("#EditarImagenPrincipal").val();*/
	jQuery.ajax({				
	url:'../Modulos/hackaton/Hackaton.php',
	type: 'POST', 
	dataType:'json',
	data: {'idAc':actualizar,'EhN':EhN,'EhI':EhI,'EhE':EhE,'EhF':EhF/*,'EhImg':EhImg*/} 
})
.done(function(Res) {
	if(Res=='0'){
			$('#ModalEditarHackaton').modal("hide");
		alertify.set('notifier','position', 'top-right');
 		alertify.success('Hackaton actualizado');
 		CargarTablaHack();	
	} 
	else if (Res=='1') {
		$('#ModalEditarHackaton').modal('show');
		alertify.set('notifier','position', 'top-right');
 		alertify.error('Fecha limite de Registros no valido');
	} 
	else if(Res=='2'){
		$('#ModalEditarHackaton').modal('show');
		alertify.set('notifier','position', 'top-right');
 		alertify.error('Fecha limite de Registros no valido');
	}
	else if (Res=='3') {

		$('#ModalEditarHackaton').modal('show');
		alertify.set('notifier','position', 'top-right');
 		alertify.error('Fecha de Inicio del Hackaton no valido');

	}  else if(Res=='4'){

		$('#ModalEditarHackaton').modal('show');
		alertify.set('notifier','position', 'top-right');
 		alertify.error('Edición: Minimo 5 Caracteres ');
 		 
	}

 
})
.fail(function(jqXHR, textStatus, errorThrown) {
            console.log('error');
            console.log(errorThrown);
            console.log(jqXHR);
  })
	

	
}




/*Eliminar*/
let eliminar="";

function eliminarHackaton(id){ 
	eliminar=id; 
}
  
 $(document).ready(function(){
	$("#bEliminarHackaton").click(function () { 		
	 	jQuery.ajax({
		url: '../Modulos/hackaton/Hackaton.php',
		type: 'POST',
		dataType: 'json',
		data: {'IdEliminar':eliminar},
		beforeSend:function(){
			  
		}
		})
		.done(function(respuesta) {
			if (respuesta=='0') {
				$('#EliminarHackaton').modal('hide');
				alertify.set('notifier','position', 'top-right');
	 			alertify.error('Hackaton Eliminado');
				CargarTablaHack();	
			} else {
			$('#EliminarHackaton').modal('hide');
			alertify.set('notifier','position', 'top-right');
	 		alertify.error('Registro referenciado');

			}
			
			 
		})
		 
	});		
});    
 
$( document ).ready(function() {
    CargarTablaHack();
});







 var tabla_nombre;
 function CargarTablaHack() {
 	
    tabla_nombre = $("#MostrarHackaton").dataTable({
    	"destroy":true,
    	"bDeferRender": true,
        "sPaginationType": "full_numbers",
        "ajax": {
            "url": "../Modulos/hackaton/tablaHackaton.php",
            "type": "POST"
        },
        "columns": [ 
            { "data": "id" },
            { "data": "NombreHack" },
            { "data": "Inicio" },
            { "data": "FinRegProyectos" },
            { "data": "FinHack" }, 
            { "data": "Editar" },
            { "data": "Eliminar" } 
        ],
        "oLanguage": {
            "sProcessing": "Procesando...",
            "sLengthMenu": 'Mostrar <select>' +
           		'<option value="5">5</option>' +
                '<option value="10">10</option>' +
                '<option value="20">20</option>' +
                '<option value="30">30</option>' +
                '<option value="40">40</option>' +
                '<option value="50">50</option>' +
                '<option value="-1">All</option>' +
                '</select> registros',
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Por favor espere - cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });
}