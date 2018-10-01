
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA TABLE</title>
    <!--CSS-->    
    <!--<link rel="stylesheet" href="media/css/bootstrap.css">
    <link rel="stylesheet" href="media/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="media/font-awesome/css/font-awesome.css">-->
    <!--Javascript-->    
    <!--<script src="media/js/jquery-1.10.2.js"></script>
    <script src="media/js/jquery.dataTables.min.js"></script>
    <script src="media/js/dataTables.bootstrap.min.js"></script>          
    <script src="media/js/bootstrap.js"></script>
    <script src="media/js/app.js"></script>    --> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">



    <link rel="stylesheet" type="text/css" href="dataTable/datatables.min.css">
    
    <link rel="stylesheet" type="text/css" href="#dataTable/dataTables.bootstrap.min.css">

    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="dataTable/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="dataTable/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript" src="js/app.js"></script>
  
</head>

<body>
<div class="col-md-8 col-md-offset-2">
    <div class="messages_del"></div>
    <h1>MODULO HACKATON
        <a href="#" class="btn btn-success  pull-right menu" data-toggle="modal" data-target="#addDato" id="adddatos"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Nuevo Registro</a>
    </h1> 

</div>
<div class="col-md-8 col-md-offset-2">    
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" >
        <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">Edicion</th>
            <th class="text-center">Inicio</th>
            <th class="text-center">Limite de registros</th>
            <th class="text-center">Fin</th>
            <th class="text-center">Acciones</th>

        </tr>
        </thead>
        <tbody class="text-center">
        </tbody>
        <tfoot>
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">Edicion</th>
            <th class="text-center">Inicio</th>
            <th class="text-center">Limite de registros</th>
            <th class="text-center">Fin</th>
            <th class="text-center">Acciones</th>
        </tr>
        </tfoot>
    </table>        
</div>

<!-- INSERTAR DATOS -->

    <div class="modal" tabindex="-1" role="dialog" id="addDato">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">NUEVO REGISTRO</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div class="modal-body">
             <form method="POST" id="createdata"  autocomplete="off">
               <div class="messages_add">
        
               </div>
               <div class="form-group">
                 <label for="">Edicion</label>
                 <input type="text" class="form-control" name="edicion" id="edicion">
               </div>
               <div class="form-group">
                 <div class="row">
                   <div class="col-md-6">
                     <label for="">Inicio</label>
                     <input type="date" class="form-control" id="inicio" name="inicio">
                   </div>

                   <div class="col-md-6">
                     <label for="#">Limite de Registros</label>
                     <input type="date" class="form-control" id="limite" name="limite">
                   </div>
                 </div>
               </div>

               <div class="form-group">
                 <div class="row">
                   <div class="col-md-6">
                     <label for="#">Fin</label>
                     <input type="date" class="form-control" id="fin" name="fin">
                   </div>

                   <div class="col-md-6">
                     <label for="#">Imagen Principal</label>
                     <input type="text" class="form-control" id="imagen" name="imagen">
                   </div>
                 </div>
               </div>
                
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
               <button type="submit" class="btn btn-primary">Registrar</button>
             </div>
             </form> 
           </div>
         </div>
     </div>
<!--MODAL EDITAR REGISTROS-->
    <div class="modal fade" tabindex="-1" role="dialog" id="myUpd">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
            <div class="modal-header">

               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;      </span></button>
                 <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> Actualizar Registro</h4>
            </div>
             <form method="POST" id="upddata"  autocomplete="off">
             <div class="modal-body">
              <div class="messages_upd"></div> 
               <div class="form-group">
                 <label for="">Edicion</label>
                 <input type="hidden" name="id" id="id" class="form-control">
                 <input type="text" class="form-control" name="Edicion" id="Edicion">
                 
               </div>
               <div class="form-group">
                 <div class="row">
                   <div class="col-md-6">
                     <label for="">Inicio</label>
                     <input type="date" class="form-control" name="InicioHackaton" id="InicioHackaton">
                   </div>

                   <div class="col-md-6">
                     <label for="#">Limite de Registros</label>
                     <input type="date" class="form-control" name="FechLimiteRegProy" id="FechLimiteRegProy">
                   </div>
                 </div>
               </div>

               <div class="form-group">
                 <div class="row">
                   <div class="col-md-6">
                     <label for="#">Fin</label>
                     <input type="date" class="form-control" name="TerminoHack" id="TerminoHack">
                   </div>

                   <div class="col-md-6">
                     <label for="#">Imagen Principal</label>
                     <input type="text" class="form-control">
                   </div>
                 </div>
               </div>    
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
               <button type="submit" class="btn btn-primary">Registrar</button>
             </div>
             </form>
           </div>
         </div>
     </div>
     <!--FIN MODAL REGISTROS-->
      <!-- add modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="myDel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> Remover Registro</h4>
          </div>
          
          <form class="form-horizontal" method="POST" id="deldata"  autocomplete="off">

          <div class="modal-body">
              <div class="form-group"> 
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                  <h4>¿Al dar Eliminar, Se Eliminaran los datos de Forma Permanente?</h4>
                  <input type="hidden" name="e_id" id="e_id" class="form-control">
                </div> 
                <div class="col-lg-1"></div>               
              </div>                 

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-danger">Eliminar</button>
          </div>
          </form> 
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- /add modal -->
</body>
</html>
