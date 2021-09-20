<?php
	require_once "conexion.php";
	
	class ModeloErrorLog{

		static public function mdlMostrarErrorLog($tabla,$item,$valor){

			if($item!=null){
				$stmt = conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
				$stmt -> bindParam(":".$item,$valor,PDO::PARAM_STR);
				$stmt -> execute();
				return $stmt->fetch();
			}else{
				$stmt = conexion::conectar()->prepare("SELECT * FROM $tabla");
				$stmt -> execute();
				return $stmt->fetchAll();
			}
			
			$stmt ->close();
			$stmt=null;

		}
	}