<?php
 
	class conexion	{
		private $con;
		private $dbhost="localhost";
		private $dbuser="root";
		private $dbpass="";
		private $dbname="inovahack";

		
		function __construct(){
			$this->connect_db(); 
		}
		
		public function connect_db(){
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
			if ($this->con) {
				mysql_selectdb($this->dbname,$this->con);
			}

		}		
		
		public function sanitize($var){
			$return = mysqli_real_escape_string($this->con, $var);
			return $return;
		}

		public function closeConexion(){
			$this->connect_db()->close();
		}

		public function freeMemory($var){
			$var->free();
		}

		public function consultaSimple($sql){
			mysqli_query($sql);
			freeMemory($sql);
			closeConexion();
		}

		public function consultaRetorno($sql){
			$consulta=mysqli_query($sql);
			return $consulta;
			
			freeMemory($sql);
			closeConexion();
		}

		/*public function consultar($sql){
			$res=mysqli_query($this->con,$sql);
			$datos=null;
			while ($fila=mysqli_fetch_assoc($res)) {
				$datos[]=$fila;
			}
			return $datos;
			freeMemory($sql);
			closeConexion();
		}*/
 
	}

?>