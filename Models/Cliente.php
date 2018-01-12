<?php
namespace Models;
	class Cliente{

		private $Id_cliente;
		private $Nombre;
		private $Apellidos;
		private $Edad;
		private $Correo;

		private $con;

		public function __construct(){
			$this->con = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		public function get($atributo){
			return $this->atributo;
		}

		public function Listar(){
			$sql = "SELECT ID_CLIENTE,NOMBRE, APELLIDOS, EDAD , CORREO FROM CLIENTES ORDER BY ID_CLIENTE ASC";
			$datos = $this->con->ConsultaRetorno($sql);
			return $datos;
		}
		public function Add(){
			$sql = "INSERT INTO CLIENTES(NOMBRE,APELLIDOS,EDAD,CORREO) VALUES ('{$this->Nombre}','{$this->Apellidos}','{$this->Edad}','{$this->Correo}')";
			$this->con->ConsultaSimple($sql);
		}
		public function Delete(){
			$sql= "DELETE FROM CLIENTES WHERE ID_CLIENTE = '{$this->Id_cliente}'";
			$this->con->ConsultaSimple($sql);
		}
		public function Edit(){
			$sql = "UPDATE CLIENTES SET  NOMBRE = '{$this->Nombre}', APELLIDOS = '{$this->Apellidos}', EDAD = '{$this->Edad}', CORREO = '{$this->Correo}' WHERE ID_CLIENTE = '{$this->Id_cliente}'";
			$this->con->ConsultaSimple($sql);
		}
		public function View(){
			$sql ="SELECT ID_CLIENTE,NOMBRE, APELLIDOS, EDAD , CORREO FROM CLIENTES WHERE ID_CLIENTE = '{$this->Id_cliente}'";
			$datos = $this->con->ConsultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}
	}
 ?>
