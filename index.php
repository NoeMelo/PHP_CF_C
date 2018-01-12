<?php
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)) . DS);
	define('URL', 'http://localhost:8080/Melo/');
	require_once "Config/Autoload.php";
	Config\Autoload::run();
	//new Config\Request();
	require_once "Views/template.php";
	Config\Enrutador::run(new Config\Request()); // http://localhost:8080/Melo/Clientes/ver  -> clientesController


	//PRUEBA
/*	require_once "Config/Autoload.php";
	Config\Autoload::run();
	$client = new Models\Cliente();
	$client->set("Id_cliente",1);
	$datos = $client->View();
	echo $datos["NOMBRE"];*/

/*	$datos = array(
			"host"=>"localhost",
			"user"=>"root",
			"pass"=>"root",
			"db"=>"melo"
			);
	$con = new mysqli($datos['host'],$datos['user'],$datos['pass'],$datos['db']);
	$sql ="SELECT ID_CLIENTE,NOMBRE, APELLIDOS, EDAD , CORREO FROM CLIENTES WHERE ID_CLIENTE = '1'";
	$datos = $con->query($sql);
	$row = mysqli_fetch_assoc($datos);
	echo $row['APELLIDOS'];*/

 ?>
