<?php 
namespace Config;
	class Enrutador{ // se le llama boostrap en MVC, pero llamaremos Enrutador :D
		public static function run(Request $request){
			$controlador = $request->getControlador() . "Controller";
			# print $controlador; // http://localhost:8080/Melo/Clientes/ver  -> clientesController
			$ruta = ROOT . "Controllers". DS . $controlador . ".php";
			#print $ruta; //http://localhost:8080/Melo/Clientes   -> C:\wamp64\www\Melo\Controllers\clientesController.php
			$metodo = $request -> getMetodo();
			if($metodo == "index.php"){
				$metodo = "index";
			}
			$argumento = $request->getArgumento();
			if (is_readable($ruta)) {
				require_once $ruta;
				$mostrar = "Controllers\\" . $controlador;
				$controlador = new $mostrar;
				if(!isset($argumento)){
					$datos = call_user_func(array($controlador,$metodo));
				}else{
					$datos = call_user_func_array(array($controlador,$metodo), $argumento);
				}
			}

			
			//cargar vistas
			$ruta = ROOT . "Views" . DS . $request -> getControlador() . DS . $request->getMetodo() . ".php";
			#print $ruta;
			if(is_readable($ruta)){
				require_once $ruta;
			}else{
				print "no se encuentra la ruta de vistas";
			}
		}
	}

 ?>