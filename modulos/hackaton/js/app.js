var example;
$(document).ready(function() {			   
	example = $('#example').DataTable( {	
		"bDeferRender": true,			
		"sPaginationType": "full_numbers",
		"ajax": {
			"url": "listardata.php",
        	"type": "POST"
		},					
		"columns": [
			{ "data": "id" },
			{ "data": "Edicion" },
			{ "data": "InicioHackaton" },
			{ "data": "FechLimiteRegProy" },
			{ "data": "TerminoHack" },
			{ "data": "acciones" }
			],
		"oLanguage": {
            "sProcessing":     "Procesando...",
		    "sLengthMenu": 'Mostrar <select>'+
		    	'<option value="5">5</option>'+
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
	$("#createdata").submit(function(event){
		var parametro = $(this).serialize();
		$.ajax({
			url: 'create.php',
			type: 'POST',
			data: parametro,
			beforeSend: function(objeto){
				$(".messages_add").html("Procesando...")
			},
			success: function(response){
				$(".messages_add").html(response);
				example.ajax.reload(null, false);
				//$("#createdata")[0].reset();
			}
		})
		event.preventDefault();
	})
/*ACTUALIZAR REGISTRO*/
	$("#myUpd").on('show.bs.modal', function(event){
		var button = $(event.relatedTarget)
		var id = button.data('id')
		var Edicion = button.data('edicion')


		var InicioHackaton = button.data('iniciohackaton')
		var FechLimiteRegProy = button.data('fechalimite')
		var TerminoHack  = button.data('terminohack')
        
		var modal = $(this)
		modal.find('.modal-body #id').val(id)
		modal.find('.modal-body #Edicion').val(Edicion)
		modal.find('.modal-body #InicioHackaton').val(InicioHackaton)
		modal.find('.modal-body #FechLimiteRegProy').val(FechLimiteRegProy)
		modal.find('.modal-body #TerminoHack').val(TerminoHack)
	})

	$("#upddata").submit(function(event){
		var parametro = $(this).serialize();
		$.ajax({
			url: 'actualizar.php',
			type: 'POST',
			data: parametro,
			beforeSend: function(objeto){
				$(".messages_upd").html("Procesando...");
			},
			success: function(response){
				$(".messages_upd").html(response);
				example.ajax.reload(null, false);
			}
		});
		event.preventDefault();
	})
/*ELIMINAR REGISTRO*/
	$("#myDel").on('show.bs.modal', function(event){
		var button = $(event.relatedTarget)
		var id = button.data('id')
		var modal = $(this)
		modal.find('.modal-body #e_id').val(id)
	})

	$("#deldata").submit(function(event){
		var parametro = $(this).serialize();
		$.ajax({
			url: 'eliminar.php',
			type: 'POST',
			data: parametro,
			beforeSend: function(objeto){
				$(".messages_del").html("Procesando...");
			},
			success: function(response){
				$(".messages_del").html(response);
				example.ajax.reload(null, false);
			}
		});
		event.preventDefault();
		
	})
	
});