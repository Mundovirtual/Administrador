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
 	
	var botonUno="Finalizado";
	var botonDos="Finalizado";
	var botonTres="Empezar";

 
 	
	$('#faseUno').text(botonUno);
	$('#faseDos').text(botonDos);
	$('#faseTres').text(botonTres);

 	
	if ($("#faseUno").text()=="Empezar") {		 
		$('#faseUno').attr('disabled', false); 		
		$('#faseDos').attr('disabled', true);		
		$('#faseTres').attr('disabled', true);

		$("#faseUno").click(function(){ 
	    		$('#faseUno').text("Finalizar");
	    		//Update base de datos tabla: InfConfiguracion-> Status::: Estado Finalizar
	     });

	} 
	if($("#faseUno").text()=="Finalizar") {
		$('#faseUno').attr('disabled', false);		 
		$('#faseDos').attr('disabled', true);		
		$('#faseTres').attr('disabled', true); 
		
		$("#faseUno").click(function(){ 
	    		$('#faseUno').text("Finalizado");
	    		//Update base de datos tabla: InfConfiguracion-> Status::: Estado Finalizado
	     });
	}
	if ($("#faseUno").text()=="Finalizado") {
		$('#faseDos').attr('disabled', true);  
		 
	}

	//Fase dos
	if ($("#faseDos").text()=="Empezar") {
		$('#faseDos').attr('disabled', false);		 
		$('#faseUno').attr('disabled', true);		
		$('#faseTres').attr('disabled', true);		

		$("#faseDos").click(function(){ 
	    		$('#faseDos').text("Finalizar");
	    		$('#FaseDos').attr('disabled', true);
	    		//Update base de datos tabla: InfConfiguracion-> Status::: Estado Finalizar
	     });

	}
	if ($("#faseDos").text()=="Finalizar") {
		$('#faseDos').attr('disabled', false);  
		$('#faseUno').attr('disabled', true);		
		$('#faseTres').attr('disabled', true);
		
		$("#faseDos").click(function(){ 
	    		$('#faseDos').text("Finalizado");
	    		//Update base de datos tabla: InfConfiguracion-> Status::: Estado Finalizado
	    		$('#faseDos').attr('disabled', true);
	     });
	}
	if ( $("#faseDos").text()=="Finalizado") {
		$('#faseTres').attr('disabled', false);
	}

	//Fase Tres
	if ($("#faseTres").text()=="Empezar") {
		$('#faseTres').attr('disabled', false); 

		$('#faseDos').attr('disabled', true);		
		$('#faseTres').attr('disabled', true);
		
		$("#faseTres").click(function(){ 
	    		$('#faseTres').text("Finalizar");
	    		//Update base de datos tabla: InfConfiguracion-> Status::: Estado Finalizar
	     });

	}
	if($("#faseTres").text()=="Finalizar") {
		$('#faseTres').attr('disabled', false); 

		$('#faseDos').attr('disabled', true);		
		$('#faseTres').attr('disabled', true);
		
		$("#faseTres").click(function(){ 
	    		$('#faseTres').text("Finalizado");
	    		//Update base de datos tabla: InfConfiguracion-> Status::: Estado Finalizado
	     });
	}
	if ( $("#faseTres").text()=="Finalizado") {
		$('#faseTres').attr('disabled', true); 
	}
 

 	 
	
 </script> 	 