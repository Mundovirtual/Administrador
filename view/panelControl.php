 <div class="container">
	<h1 align="center">Panel de Control</h1></br>  
</div>
  
 
<div class="row">
	<div class="col-md-4">

		<div  class="card text-white bg-dark mb-3" style="max-width: 18rem;">
		  <div class="card-header bg-success" align="center">Primera Fase</div>
		  <div class="card-body"  align="center">
		     
		     <button id="faseUno" type="button" class="btn btn-primary" >Empezar</button>

		  </div>
		</div>
	
	</div>
	<div class="col-md-4">
	
		<div  class="card text-white bg-dark mb-3" style="max-width: 18rem;">
		  <div class="card-header bg-info" align="center">Segunda Fase</div>
		  <div class="card-body"  align="center">
		   
		   <button id="faseDos" type="button" class="btn btn-success">Empezar</button>

		  </div>
		</div>
		 

	</div>
	<div class="col-md-4">

		<div  class="card text-white bg-dark mb-3" style="max-width: 18rem;">
		  <div class="card-header bg-primary" align="center">Tercera Fase</div>
		  <div class="card-body" align="center">
		      <button id="faseTres" type="button" class="btn  btn-danger">Empezar</button>	   
			</div>
		</div>
		 

	</div>
</div>

 <script type="text/javascript">

 	var EstadoBotfaseUno ="Empezar";
 	var EstadoBotfaseUno ="Finalizar";
 	var EstadoBotfaseUno ="Finalizado";

 	alert(EstadoBotfaseUno);
 	alert(EstadoBotfaseUno=="Empezar");

 	
 	if (EstadoBotfaseUno=="Empezar") {
    	$('#faseUno').text("Finalizar");
    	//Boton fase dos
    	$('#faseDos').attr('disabled', false);
    	//Boton fase tres
    	$('#faseTres').attr('disabled', false);

 	}else if(EstadoBotfaseUno="Finalizar"){

 	}else{

 	}











 	/*Botones*/
 	/*

 	$("#faseUno").click(function(){
    	$('#faseUno').attr('disabled', true);
    	$('#faseUno').text("Finalizado");
    	fu=1;

    	//Boton fase dos
    	$('#faseDos').attr('disabled', false);
    	//Boton fase tres
    	$('#faseTres').attr('disabled', true);

    });

    $("#faseDos").click(function(){
    	$('#faseDos').attr('disabled', true);
    	$('#faseDos').text("Finalizado");
    	fd=1;

    	//Boton fase dos
    	$('#faseDos').attr('disabled', true);
    	//Boton fase tres
    	$('#faseTres').attr('disabled', false);

    });

    $("#faseTres").click(function(){
    	$('#faseTres').attr('disabled', true);
    	$('#faseTres').text("Finalizado");
    	ft=1;

    	//Boton fase dos
    	$('#faseUno').attr('disabled', true);
    	//Boton fase tres
    	$('#faseDos').attr('disabled', true);
    });
 
 	

 	 
	
 </script> 	 