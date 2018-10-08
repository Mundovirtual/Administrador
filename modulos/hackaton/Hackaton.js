 
/*Registrar Hackaton*/
jQuery(document).on('submit', "#ModalRegistroHackaton", function(event){ 
	event.preventDefault(); 
     var datos=$("#ModalRegistroHackaton").serialize(); 
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
	 		CargarTabla();	
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
	//$("#EditarImagenPrincipal").val(Imagen);
}
 
function ActualizandoHackaton() { 
	
		var EhN=$("#EditarNombreHack").val();
		var EhI=$("#EditarInicioHack").val();
		var EhE=$("#EditarEntregaProyectos").val();
		var EhF=$("#EditarFinHack").val();  
		/*var EhImg=$("#EditarImagenPrincipal").val();*/
	$.ajax({		
		url:'../Modulos/hackaton/Hackaton.php',
		type: 'POST', 
		dataType:'json',
		data: {'idAc':actualizar,'EhN':EhN,'EhI':EhI,'EhE':EhE,'EhF':EhF/*,'EhImg':EhImg*/},
		beforeSend:function(){  	
		 

		}
	})
	.done(function(respuesta) { 
		if (respuesta=='1') {
			$('#ModalEditarHackaton').modal('show');
			alertify.set('notifier','position', 'top-right');
	 		alertify.error('Fecha limite de Registros no valido');
		} 
		else if(respuesta=='2'){
			$('#ModalEditarHackaton').modal('show');
			alertify.set('notifier','position', 'top-right');
	 		alertify.error('Fecha limite de Registros no valido');
		}
		else if (respuesta=='3') {

			$('#ModalEditarHackaton').modal('show');
			alertify.set('notifier','position', 'top-right');
	 		alertify.error('Fecha de Inicio del Hackaton no valido');

		}  else if(respuesta=='4'){

			$('#ModalEditarHackaton').modal('show');
			alertify.set('notifier','position', 'top-right');
	 		alertify.error('Edición: Minimo 5 Caracteres ');
	 		 
		}
		else if(respuesta=='0'){

			$('#ModalEditarHackaton').modal('hide');
			alertify.set('notifier','position', 'top-right');
	 		alertify.success('Hackaton actualizado');
	 		CargarTabla();	
		}
		
		else if(respuesta!='0' || respuesta!='1' || respuesta!='2' || respuesta!='3'||respuesta!='4'){
 
	 		alertify.error('Error desconocido');
	 		CargarTabla();

		}
 
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
				CargarTabla();	
			} else {
			$('#EliminarHackaton').modal('hide');
			alertify.set('notifier','position', 'top-right');
	 		alertify.error('Registro referenciado');

			}
			
			 
		})
		 
	});		
});    
 
$( document ).ready(function() {
    CargarTabla();
});







 var tabla_nombre;
 function CargarTabla() {
 	
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