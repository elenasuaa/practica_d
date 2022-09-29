<?php 

class Conexion extends mysqli{

	function __construct(){
		parent::__construct("DB_Elena","root","1234","tutorias");
		$this->set_charset("utf8");
		if ($this->connect_errno){
			echo "Falla en la conexión";
			exit;
		}
	}
	function insertarConsulta($consulta){
		$resultado=$this->query($consulta);

		if (!$resultado){
			return false;
		}else{
			return $this->insert_id;
		}
	}
	function returnConsulta($consulta){
		$datos=$this->query($consulta);
		return $datos;
	}
	function cerrarConexion(){
		$this->close();
	}
}
 ?>
