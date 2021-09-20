<?php

	class ControladorErrorLog{

		static public function ctrMostrarErrorLog($item,$valor){
			
			// $html = explode('|', file_get_contents("error_log.txt"));
			// return $html;
			
			$tabla="errorlog";
			$respuesta = ModeloErrorLog::mdlMostrarErrorLog($tabla,$item,$valor);
			return $respuesta;
		}
		
	}