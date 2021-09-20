<?php

    function logger($variable, $datos, $archivo, $linea, $clase, $metodo, $fecha, $hora){
        require "modelos/conexion.php";
        if(is_array($datos)){
            $datos = json_encode($datos);
        }
        if(is_bool($datos) && $datos == false){
            $datos = 0;
        }
        $stmt =  conexion::conectar()->prepare("insert into errorlog(archivo,linea,clase,metodo,variable,datos,fecha,hora) values(:archivo,:linea,:clase,:metodo,:variable,:datos,:fecha,:hora)");
        $stmt -> bindParam(":archivo",$archivo,PDO::PARAM_STR);
        $stmt -> bindParam(":linea",$linea,PDO::PARAM_STR);
        $stmt -> bindParam(":clase",$clase,PDO::PARAM_STR);
        $stmt -> bindParam(":metodo",$metodo,PDO::PARAM_STR);
        $stmt -> bindParam(":variable",$variable,PDO::PARAM_STR);
        $stmt -> bindParam(":datos",$datos,PDO::PARAM_STR);
        $stmt -> bindParam(":fecha",$fecha,PDO::PARAM_STR);
        $stmt -> bindParam(":hora",$hora,PDO::PARAM_STR);
        $stmt -> execute();
		$stmt=null;
    }
