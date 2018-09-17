$(document).ready(function(){
   visualizarHackaton();
})

function visualizarHackaton(){
    $(document).ready(function(){
    	$.ajax({
		 url: '../modulos/Hackaton/visualizar.php',
		 beforeSend:function(){
		 	$(".visualizar").html(
		 		"<div class='alert alert-danger alert-dismissible fade show text-center' role='alert'><i class='fas fa-times'></i><strong> Cargando datos !</strong><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
		 },
		 success:function(respuesta){
		 	$(".visualizar").html(respuesta);
		 }
	})
   
    })
         
           
}