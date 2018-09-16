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
	var botonTres="Finalizado";


	$('#faseUno').attr('disabled', true);
	$('#faseDos').attr('disabled', true);		
	$('#faseTres').attr('disabled', true);
 	
	$('#faseUno').text(botonUno);
	$('#faseDos').text(botonDos);
	$('#faseTres').text(botonTres);

 	
	if ($("#faseUno").text()=="Empezar") {
		$('#faseUno').attr('disabled', false); 
		
		$("#faseUno").click(function(){ 
	    		$('#faseUno').text("Finalizar");
	    		//Update base de datos tabla: InfConfiguracion-> Status::: Estado Finalizar
	     });

	} else if($("#faseUno").text()=="Finalizar") {
		$('#faseUno').attr('disabled', false); 
		
		$("#faseUno").click(function(){ 
	    		$('#faseUno').text("Finalizado");
	    		//Update base de datos tabla: InfConfiguracion-> Status::: Estado Finalizado
	     });
	}else if ($("#faseUno").text()=="Finalizado") {
		$('#faseDos').attr('disabled', true);  
	}

	//Fase dos
	if ($("#faseDos").text()=="Empezar") {
		$('#faseDos').attr('disabled', false); 
		
		$("#faseDos").click(function(){ 
	    		$('#faseDos').text("Finalizar");
	    		//Update base de datos tabla: InfConfiguracion-> Status::: Estado Finalizar
	     });

	} else if($("#faseDos").text()=="Finalizar") {
		$('#faseDos').attr('disabled', false); 
		
		$("#faseDos").click(function(){ 
	    		$('#faseDos').text("Finalizado");
	    		//Update base de datos tabla: InfConfiguracion-> Status::: Estado Finalizado
	     });
	}else if ( $("#faseDos").text()=="Finalizado") {
		$('#faseTres').attr('disabled', false);
	}

	//Fase Tres
	if ($("#faseTres").text()=="Empezar") {
		$('#faseTres').attr('disabled', false); 
		
		$("#faseTres").click(function(){ 
	    		$('#faseTres').text("Finalizar");
	    		//Update base de datos tabla: InfConfiguracion-> Status::: Estado Finalizar
	     });

	} else if($("#faseTres").text()=="Finalizar") {
		$('#faseTres').attr('disabled', false); 
		
		$("#faseTres").click(function(){ 
	    		$('#faseTres').text("Finalizado");
	    		//Update base de datos tabla: InfConfiguracion-> Status::: Estado Finalizado
	     });
	}else if ( $("#faseTres").text()=="Finalizado") {
		$('#faseTres').attr('disabled', true); 
	}
 

 	 
	
 </script> 	 