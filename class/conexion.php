<?php
 
	class conexion	{
		private $con;
		private $dbhost="localhost";
		private $dbuser="root";
		private $dbpass="";
		private $dbname="inovahack";

		
		public function __construct(){
			$this->connect_db(); 
		}
		
		public function connect_db(){

			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			
			if(mysqli_connect_error()){

				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			
			}
			if ($this->con) {
			
				mysqli_select_db($this->con,$this->dbname);
			
			}

		}		
		
		public function sanitize($var){
			
			$return = mysqli_real_escape_string($this->con, $var);
			
			return $return;
		}
 
		public function consultaRetorno($sql){
			
			 $res=$this->con->query($sql);
			
			 return $res;
		}
	}
?>