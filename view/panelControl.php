 <div class="container">
	<h1 align="center">Panel de Control</h1></br>  
<<<<<<< HEAD
</div>
  
 
=======
</div> 
 

<div class="card-header font-weight-bold font-italic" align="center">
      <h3>Hackaton 2 Edicion</h3>
 		
 		<button type="button" class="btn btn-info" id="vertical1" name="Vertical Uno" value="vertical1" onclick="VerticalAlerta(this)" style="margin: 20px">Vertical 1 
 		</button>
 		<button type="button" class="btn btn-info" id="vertical2" name="Vertical Dos" value="vertical2" onclick="VerticalAlerta(this)"  style="margin: 20px">Vertical 2 
 		</button>
 		<button type="button" class="btn btn-info" id="vertical3" name="Vertical Tres" value="vertical3" onclick="VerticalAlerta(this)"  style="margin: 20px">Vertical 3 
 		</button>
 

	 
</div>
   


>>>>>>> master
<div class="row">
	<div class="col-md-4">

		<div  class="card text-white bg-dark mb-3" style="max-width: 18rem;">
		  <div class="card-header bg-success" align="center">Primera Fase</div>
		  <div class="card-body"  align="center">
		     
<<<<<<< HEAD
		     <button id="faseUno" type="button" class="btn btn-primary" ></button>
=======
		     <button id="faseUno" type="button" class="btn btn-success"></button>
>>>>>>> master

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
<<<<<<< HEAD
		      <button id="faseTres" type="button" class="btn  btn-danger"></button>	   
=======
		      <button id="faseTres" type="button" class="btn btn-success"></button>	   
>>>>>>> master
			</div>
		</div>
		 

	</div>
</div>

 <script type="text/javascript">
 	
<<<<<<< HEAD
	var botonUno="Empezar";
	var botonDos="Empezar";
	var botonTres="Empezar";
=======
	let botonUno="Empezar";
	let botonDos="Empezar";
	let botonTres="Empezar";
>>>>>>> master
 
 	
	$('#faseUno').text(botonUno);
	$('#faseDos').text(botonDos);
	$('#faseTres').text(botonTres);

<<<<<<< HEAD
	$('#faseUno').attr('disabled', true); 		
	$('#faseDos').attr('disabled', true);		
	$('#faseTres').attr('disabled', true);
 	
	
	//Boton fase uno
	if ($("#faseUno").text()=="Empezar" && $("#faseDos").text()=="Empezar" && $("#faseTres").text()=="Empezar") {
		 
		$('#faseUno').attr('disabled', false);
		
		$("#faseUno").click(function(){ 
	    		$('#faseUno').text("Finalizar");
=======
	$('#faseUno').attr('disabled', true); 
	$('#faseDos').attr('disabled', true);	
	$('#faseTres').attr('disabled', true);
 	
	if ($("#faseUno").text()=="Empezar" && $("#faseDos").text()=="Empezar" && $("#faseTres").text()=="Empezar") {
		 
		$('#faseUno').attr('disabled', false);
		 
		$("#faseUno").click(function(){ 
			$('#faseUno').addClass("btn btn-warning");
	    		$('#faseUno').text("Finalizar");
			

>>>>>>> master
	    		//Update base de datos tabla: InfConfiguracion-> Status::: Estado Finalizar

	     });
	} 
	if($("#faseUno").text()=="Finalizar" && $("#faseDos").text()=="Empezar" && $("#faseTres").text()=="Empezar") {
		
		$('#faseUno').attr('disabled', false);
		
		$("#faseUno").click(function(){ 
	    		$('#faseUno').text("Finalizado");
	    		$('#faseUno').attr('disabled', true);
<<<<<<< HEAD
=======
	    		$('#faseUno').addClass("btn btn-danger");
>>>>>>> master
	    		//Update base de datos tabla: InfConfiguracion-> Status::: Estado Finalizado
	     });
	}
	if ($("#faseUno").text()=="Finalizado" && $("#faseDos").text()=="Empezar" && $("#faseTres").text()=="Empezar") {
<<<<<<< HEAD
		 
		 $('#faseUno').attr('disabled', true); 
	}


	//Boton Fase dos
=======
		 $('#faseUno').addClass("btn btn-danger");
		 $('#faseUno').attr('disabled', true); 
		 
	}

	//Fase dos
>>>>>>> master
	if ($("#faseDos").text()=="Empezar" && $("#faseUno").text()=="Finalizado" && $("#faseTres").text()=="Empezar") {
		$('#faseDos').attr('disabled', false);		 
		 	 
		$("#faseDos").click(function(){ 
	    		$('#faseDos').text("Finalizar"); 
<<<<<<< HEAD
=======
	    		$('#faseDos').addClass("btn btn-warning");	    		
>>>>>>> master
	    		$('#faseDos').attr('disabled', false);
	    		//Update base de datos tabla: InfConfiguracion-> Status::: Estado Finalizar
	     });
	}
	if ($("#faseDos").text()=="Finalizar"  && $("#faseUno").text()=="Finalizado" && $("#faseTres").text()=="Empezar") { 
		$('#faseDos').attr('disabled', false);	
<<<<<<< HEAD

		$("#faseDos").click(function(){ 
	    		$('#faseDos').text("Finalizado");
=======
		$('#faseDos').addClass("btn btn-warning");
		$("#faseDos").click(function(){ 
	    		$('#faseDos').text("Finalizado");
	    		$('#faseDos').addClass("btn btn-danger");
>>>>>>> master
	    		$('#faseDos').attr('disabled', true);
	    		//Update base de datos tabla: InfConfiguracion-> Status::: Estado Finalizado	    	 
	     });
	}
	if ( $("#faseDos").text()=="Finalizado" && $("#faseUno").text()=="Finalizado" && $("#faseTres").text()=="Empezar") {
<<<<<<< HEAD
		 
	}


	//Boton Fase Tres
=======
		 	$('#faseDos').addClass("btn btn-danger");
	}

	//Fase Tres
>>>>>>> master
	if ($("#faseTres").text()=="Empezar" && $("#faseUno").text()=="Finalizado" && $("#faseDos").text()=="Finalizado") {
		$('#faseTres').attr('disabled', false);
		
		$("#faseTres").click(function(){ 
	    		$('#faseTres').text("Finalizar");
<<<<<<< HEAD
=======
	    		$('#faseTres').addClass("btn btn-warning");
>>>>>>> master
	    		//Update base de datos tabla: InfConfiguracion-> Status::: Estado Finalizar
	     });
	}
	if($("#faseTres").text()=="Finalizar"&& $("#faseUno").text()=="Finalizado" && $("#faseDos").text()=="Finalizado") {
<<<<<<< HEAD
		
=======
		$('#faseTres').addClass("btn btn-warning");
>>>>>>> master
		$('#faseTres').attr('disabled', false);
		
		$("#faseTres").click(function(){ 
	    		$('#faseTres').text("Finalizado");
<<<<<<< HEAD
=======
	    		$('#faseTres').addClass("btn btn-danger");
>>>>>>> master
	    		//Update base de datos tabla: InfConfiguracion-> Status::: Estado Finalizado
	     });
	}
	if ( $("#faseTres").text()=="Finalizado" && $("#faseUno").text()=="Finalizado" && $("#faseDos").text()=="Finalizado") {
<<<<<<< HEAD
		$('#faseTres').attr('disabled', true); 
	}
 
 	 
	
 </script> 
=======
		$('#faseUno').addClass("btn btn-danger");
		$('#faseDos').addClass("btn btn-danger");
		$('#faseTres').addClass("btn btn-danger");
		$('#faseTres').attr('disabled', true); 
	}	


	/*Alerty fy*/
	 
	function VerticalAlerta(id){
		let text=id.name; 
		alertify.set('notifier','position', 'top-right');
 		alertify.success( 'Seleccionaste : '+text);
	}

</script> 
>>>>>>> master
