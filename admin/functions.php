<?php

    define('RUTA', 'http://localhost/Project/');
    
    function conect(){
        $conexion = new PDO('mysql:host=localhost;dbname=project', 'root', '');
        return $conexion;
    }

    function cleanDates($variable){
		$variable = trim($variable);
		$variable = filter_var($variable, FILTER_SANITIZE_STRING);
		return $variable;
	}

?>