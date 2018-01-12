<?php
namespace Controllers;

	use Models\Cliente as Cliente;

	class clientesController{

		private $cliente;

		public function __construct(){
			$this->cliente = new Cliente();
		}

		public function index(){
			#print "hola soy el index de clientesController";
			$datos = $this->cliente->Listar();
			return $datos;
		}
		public function agregar(){
			if($_POST){
				$this->cliente->set('Nombre',$_POST['nombre']);
				$this->cliente->set('Apellidos',$_POST['apellidos']);
				$this->cliente->set('Edad',$_POST['edad']);
				$this->cliente->set('Correo',$_POST['correo']);

				$this->cliente->Add();
				header('Location: '. URL . "clientes");
			}
		}
		public function editar($id){
			if (!$_POST) {
				# code...
				$this->cliente->set("Id_cliente",$id);
				$datos = $this->cliente->View();
				return $datos;
			}else{
				$this->cliente->set("Id_cliente",$_POST['id_cliente']);
				$this->cliente->set('Nombre',$_POST['nombre']);
				$this->cliente->set('Apellidos',$_POST['apellidos']);
				$this->cliente->set('Edad',$_POST['edad']);
				$this->cliente->set('Correo',$_POST['correo']);
				$this->cliente->Edit();
				header('Location: '. URL . "clientes");
			}
		}
		public function ver($id){
			$this->cliente->set("Id_cliente",$id);
			$datos = $this->cliente->View();
			return $datos;
		}

		public function eliminar($id){
			$this->cliente->set("Id_cliente",$id);
			$this->cliente->Delete();
			header('Location: '. URL . "clientes");
		}
	}

	#$clientes = new clientesController();

 ?>
