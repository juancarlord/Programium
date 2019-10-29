<?php 
	$host = "localhost";
	$db = "db_quiz";
	$user = "root";
	$pass = "";

	try{
		/*Estable conexion a la BD*/
		$connect = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$user, $pass);
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Conexion exitosa <br>";
			/*Eliminar conexion*/
		$connect=null;
	}