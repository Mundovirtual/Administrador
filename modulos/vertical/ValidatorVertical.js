alert();
jQuery(document).on('submit','#RV',function(event){
      event.preventDefault();
 	 alert();
      jQuery.ajax({
          url:'CrudVertical.php',
          type:'POST',
          dataType:'json',

          data:$(this).serialize(),
          beforeSend:function(){
             console.log("hola");
          }
        })
        .done(function(respuesta){
          console.log(respuesta.error);
                     
        })
        .fail(function(resp){
                console.log("fail");
              })
        .always(function(){
           console.log("always");
      });
});

















 
 $(document).ready(function(){

		function guardarVerticale(){
 
	 		/*var Nombre=$("#NombreVertical").val(); 
	 		var Descripcion=$("#DescripcionVertical").val();
	 		var Asesoria=$("#AsesoriaVertical").val();
	 		var Hack=$("#EdicionVertical").val();

	 		alert(Nombre);
	 		alert(Descripcion);
	 		alert(Asesoria);
	 		alert(Hack);


	 		$.ajax({
	 			url: '/path/to/file',
	 			type: 'default GET (Other values: POST)',
	 			dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
	 			data: {param1: 'value1'},
	 		})
	 		.done(function() {
	 			console.log("success");
	 		})
	 		.fail(function() {
	 			console.log("error");
	 		})
	 		.always(function() {
	 			console.log("complete");
	 		});*/
	 		
	 	}
	}
);


  
 