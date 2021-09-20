
<?php

	/* $array = ["primero" => 1, "segundo" => [1,2,3], "tercero" => [ "nombre" => "pepito", "apellido" => "perez"], "cuarto" => 4, "quinto" => 5];
	// $array = [1,2,3,4,[5,6,7,8]];
	$json = json_encode($array);
	$nombre_archivo = 'error_log.txt';
	$contenido = '|adfdsfsdfasdfsdfsdfsdfasdfsdfsfs|33|VistasEmpresa|Confirmar|$data|'.$json.'|2021-06-17|11:15:09';
	$gestor = fopen($nombre_archivo, 'a');
	fwrite($gestor, $contenido);
	fclose($gestor);
	echo "Listo!!!!";
	exit; */
	
	require_once "controladores/plantilla.controlador.php";
	require_once "controladores/errorlog.controlador.php";

	require_once "modelos/errorlog.modelo.php";
	$plantilla = new ControladorPlantilla();
	$plantilla -> ctrPlantilla();
