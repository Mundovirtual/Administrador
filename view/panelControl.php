 <div class="container">
	<h1 align="center">Panel de Control</h1></br>  
</div>
  
 
<div class="row">
	<div class="col-md-4">

		<div  class="card text-white bg-dark mb-3" style="max-width: 18rem;">
		  <div class="card-header bg-success" align="center">Primera Fase</div>
		  <div class="card-body"  align="center">
		     
		     <button id="faseUno" type="button" class="btn btn-primary" ></button>

		  </div>
		</div>
	
	</div>
	<div class="col-md-4">
	
		<div  class="card text-white bg-dark mb-3" style="max-width: 18rem;">
		  <div class="card-header bg-info" align="center">Segunda Fase</div>
		  <div class="card-body"  align="center">
		   
		   <button id="faseDos" type="button" class="btn btn-success"></button>

		  </div>
		</div>
		 

	</div>
	<div class="col-md-4">

		<div  class="card text-white bg-dark mb-3" style="max-width: 18rem;">
		  <div class="card-header bg-primary" align="center">Tercera Fase</div>
		  <div class="card-body" align="center">
		      <button id="faseTres" type="button" class="btn  btn-danger"></button>	   
			</div>
		</div>
		 

	</div>
</div>

 <script type="text/javascript">
 	
	var botonUno="Empezar";
	var botonDos="Empezar";
	var botonTres="Empezar";
 
 	
	$('#faseUno').text(botonUno);
	$('#faseDos').text(botonDos);
	$('#faseTres').text(botonTres);

	$('#faseUno').attr('disabled', true); 		
	$('#faseDos').attr('disabled', true);		
	$('#faseTres').attr('disabled', true);
 	
	
	//Boton fase uno
	if ($("#faseUno").text()=="Empezar" && $("#faseDos").text()=="Empezar" && $("#faseTres").text()=="Empezar") {
		 
		$('#faseUno').attr('disabled', false);
		
		$("#faseUno").click(function(){ 
	    		$('#faseUno').text("Finalizar");
	    		//Update base de datos tabla: InfConfiguracion-> Status::: Estado Finalizar

	     });
	} 
	if($("#faseUno").text()=="Finalizar" && $("#faseDos").text()=="Empezar" && $("#faseTres").text()=="Empezar") {
		
		$('#faseUno').attr('disabled', false);
		
		$("#faseUno").click(function(){ 
	    		$('#faseUno').text("Finalizado");
	    		$('#faseUno').attr('disabled', true);
	    		//Update base de datos tabla: InfConfiguracion-> Status::: Estado Finalizado
	     });
	}
	if ($("#faseUno").text()=="Finalizado" && $("#faseDos").text()=="Empezar" && $("#faseTres").text()=="Empezar") {
		 
		 $('#faseUno').attr('disabled', true); 
	}


	//Boton Fase dos
	if ($("#faseDos").text()=="Empezar" && $("#faseUno").text()=="Finalizado" && $("#faseTres").text()=="Empezar") {
		$('#faseDos').attr('disabled', false);		 
		 	 
		$("#faseDos").click(function(){ 
	    		$('#faseDos').text("Finalizar"); 
	    		$('#faseDos').attr('disabled', false);
	    		//Update base de datos tabla: InfConfiguracion-> Status::: Estado Finalizar
	     });
	}
	if ($("#faseDos").text()=="Finalizar"  && $("#faseUno").text()=="Finalizado" && $("#faseTres").text()=="Empezar") { 
		$('#faseDos').attr('disabled', false);	

		$("#faseDos").click(function(){ 
	    		$('#faseDos').text("Finalizado");
	    		$('#faseDos').attr('disabled', true);
	    		//Update base de datos tabla: InfConfiguracion-> Status::: Estado Finalizado	    	 
	     });
	}
	if ( $("#faseDos").text()=="Finalizado" && $("#faseUno").text()=="Finalizado" && $("#faseTres").text()=="Empezar") {
		 
	}


	//Boton Fase Tres
	if ($("#faseTres").text()=="Empezar" && $("#faseUno").text()=="Finalizado" && $("#faseDos").text()=="Finalizado") {
		$('#faseTres').attr('disabled', false);
		
		$("#faseTres").click(function(){ 
	    		$('#faseTres').text("Finalizar");
	    		//Update base de datos tabla: InfConfiguracion-> Status::: Estado Finalizar
	     });
	}
	if($("#faseTres").text()=="Finalizar"&& $("#faseUno").text()=="Finalizado" && $("#faseDos").text()=="Finalizado") {
		
		$('#faseTres').attr('disabled', false);
		
		$("#faseTres").click(function(){ 
	    		$('#faseTres').text("Finalizado");
	    		//Update base de datos tabla: InfConfiguracion-> Status::: Estado Finalizado
	     });
	}
	if ( $("#faseTres").text()=="Finalizado" && $("#faseUno").text()=="Finalizado" && $("#faseDos").text()=="Finalizado") {
		$('#faseTres').attr('disabled', true); 
	}
 
 	 
	
 </script> 