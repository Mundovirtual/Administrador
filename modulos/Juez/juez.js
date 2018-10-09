function DetallesJuez(nombre,FechaNacimiento,Correo,Institucion,Carrera){
$("#NombreJuez").val(nombre);
$("#FechaNacimientoJuez").val(FechaNacimiento);
$("#CorreoJuez").val(Correo);
$("#InstitucionJuez").val(Institucion);
$("#CarreraJuez").val(Carrera);

}
let idAceptar="";
 
function AceptarJuez(id){
    idAceptar=id; 
}

let idRechazar="";
 
function RechazarJuez(id){
    idRechazar=id;
}

function Aceptado(){
    $.ajax({
        url: '../Modulos/Juez/juez.php',
        type: 'POST',
        dataType: 'json',
        data: {IdAceptarJuez: idAceptar},
    })
    .done(function(resp) {
        if (resp=='0') {
            $('#AceptarJuez').modal('hide');
            alertify.set('notifier','position', 'top-right');
            alertify.success('Juez aceptado');
             CargarTabla();
        } else {

            $('#AceptarJuez').modal('show');
            alertify.set('notifier','position', 'top-right');
            alertify.error('Error desconocido');
             CargarTabla();
        } 
    })
 
    
}

function Rechazar(){
    $.ajax({
        url: '../Modulos/Juez/juez.php',
        type: 'POST',
        dataType: 'json',
        data: {idRechazar: idRechazar},
    })
    .done(function(resp) {
        if (resp=='0') {
            $('#EliminarJuez').modal('show');
            alertify.set('notifier','position', 'top-right');
            alertify.error('Solicitud eliminada');
             CargarTabla();
        } else {

            $('#EliminarJuez').modal('show');
            alertify.set('notifier','position', 'top-right');
            alertify.error('Error desconocido');
             CargarTabla();
        } 
    })
   
}


$( document ).ready(function() {
    CargarTabla();
});

 var tabla_nombre;
 function CargarTabla() {
 	
    tabla_nombre = $("#MostrarJueces").dataTable({
    	"destroy":true,
    	"bDeferRender": true,
        "sPaginationType": "full_numbers",
        "ajax": {
            "url": "../Modulos/Juez/TablaJuez.php",
            "type": "POST"
        },

           "columns": [ 
            { "data": "Num" },
            { "data": "Nombre" },
            { "data": "Telefono" },
            { "data": "correo" },
            { "data": "Detalles" }, 
            { "data": "Aceptar" },
            { "data": "Rechazar" } 
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