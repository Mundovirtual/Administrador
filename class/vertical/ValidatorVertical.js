jQuery(document).on('submit', "#RV", function(event){
	event.preventDefault(); 
     var datos=$(this).serialize();  
	jQuery.ajax({
		url: '../vertical/MetodosVertical.php',
		type: 'POST',
		dataType: 'json',
		data: datos,
		beforeSend:function(){
			 
		}
	})
	.done(function(respuesta) {
		console.log(respuesta);
	})
	.fail(function() {
		console.log("error "+datos );
	})
	.always(function() {
		console.log("complete");
	});
	


});







 











 


  
 