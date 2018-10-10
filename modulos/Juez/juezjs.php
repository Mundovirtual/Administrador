<script type="text/javascript">


function DetallesJuez(psw,institucion,carrera,habilidades,Hobbies,FNacimiento,sexo,Playera){
 
	$("#PasswordJuez").val(psw);
	$("#InstitucionJuez").val(institucion);
	$("#CarreraJuez").val(carrera);
	$("#HabilidadesJuez").val(habilidades);
	$("#HobbiesJuez").val(Hobbies);
	$("#FechaNacimientoJuez").val(FNacimiento);
	$("#sexoJuez").val(sexo);
	$("#playeraJuez").val(Playera);
}


let idEditar="";

function EditarJuez(id,psw,celular,corre){
	idEditar=id;
	$("#PaswJuez").val(psw);
	$("#CelularJuez").val(celular);
	$("#CorreoJuez").val(corre);
}

let idEliminar="";

function EliminarJuez(id){
	idEliminar=id;
}


function actualizandoJuez(){
 
	 PaswJuez=$("#PaswJuez").val();
	 CelularJuez=$("#CelularJuez").val();
	 CorreoJuez=$("#CorreoJuez").val(); 
	$.ajax({
		url: '../Modulos/Juez/juez.php',
		type: 'POST',
		dataType: 'json',
		data: {'IdActualizar': idEditar,'psw':PaswJuez,'celular':CelularJuez,'correo':CorreoJuez}
	})
	.done(function(hola) { 
		if (hola=='0') {
			CargarTablaJuez();
			$("#EditarJueces").modal('hide');
			alertify.set('notifier','position', 'top-right');
	 		alertify.success('Datos actualizados');
		} else if(hola=='1'){
			$("#EditarJueces").modal('show');
			alertify.set('notifier','position', 'top-right');
	 		alertify.error('Contraseña vacía');		
		}else if(hola=='2'){
			$("#EditarJueces").modal('show');
			alertify.set('notifier','position', 'top-right');
	 		alertify.error('número celular no valido');		
			
		}else if(hola=='3'){
			$("#EditarJueces").modal('show');
			alertify.set('notifier','position', 'top-right');
	 		alertify.error('Correo no valido');
		}

	});
 

	
}
function EliminandoJuez(){
	$.ajax({
			url: '../Modulos/Juez/juez.php',
			type: 'POST',
			dataType: 'json',
			data: {idEliminar: idEliminar},
		})
		.done(function(respuesta) {
			if (respuesta=='0') {
			alertify.set('notifier','position', 'top-right');
	 		alertify.success('Juez eliminado');			
			$("#EliminarJueces").modal('hide');
			CargarTablaJuez();
			} else {
				alertify.set('notifier','position', 'top-right');
	 		alertify.error('Error inesperado');			
			$("#EliminarJueces").modal('hide');
			}
			
		});
 
			
} 

 
$( document ).ready(function() {
 	CargarTablaJuez();
});

 var tabla_nombre;
 function CargarTablaJuez() {
  
    tabla_nombre = $("#TablaJuezAceptado").dataTable({
    	"destroy":true,
    	"bDeferRender": true,
        "sPaginationType": "full_numbers",
        "ajax": {
            "url": "../Modulos/juez/TablaJuezAceptado.php",
            "type": "POST"
        },
 
           "columns": [ 
            { "data": "Num" },
            { "data": "Nombre" },
            { "data": "Telefono" },
            { "data": "correo" },
            { "data": "Detalles" }, 
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
            "sSearch": "Filtrar:",
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
</script>