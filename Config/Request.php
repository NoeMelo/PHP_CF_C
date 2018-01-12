<?php 
namespace Config;
	class Request{

		private $controlador;
		private $metodo;
		private $argumento;

		public function __construct(){
			if (isset($_GET['url'])) {
				# code...
				$ruta = filter_input(INPUT_GET, 'url',FILTER_SANITIZE_URL); // SE FILTRA LA URL DEL ARCHIVO .htaccess
				$ruta = explode("/", $ruta);//en el buscador el / separa las rutas
				$ruta = array_filter($ruta); // las rutas ingresadas en el buscador los guarda en un array
				#print_r($ruta);
				if($ruta[0]=="index.php"){
					$this->controlador = "clientes";
				} else{
					$this->controlador = strtolower(array_shift($ruta)); // convierte en minuscula y extrae el primer elemento
				}
				$this->metodo = strtolower(array_shift($ruta));
				if (!$this->metodo) {
					$this->metodo = "index";
				}
				$this->argumento = $ruta;
				#print $this->metodo; //  http://localhost:8080/Melo/clientes/    deberá mostrar -> index
			}else{
				$this->controlador = "clientes";
				$this->metodo = 'index';
			}
		}

		public function getControlador(){
			return $this->controlador;
		}
		public function getMetodo(){
			return $this->metodo;
		}
		public function getArgumento(){
			return $this->argumento;
		}
	}


 ?>