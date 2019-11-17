<?php 
	$host = "localhost";
	$db = "db_usuario";
	$user = "root";
	$pass = "";

	try{
		/*Estable conexion a la BD*/
		$connect = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$user, $pass);
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Conexion exitosa <br>";
		
		/*Insertar registro en la tabla*/
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "INSERT INTO persona(EMAIL, USUARIO, CONTRASEÑA) VALUES (:email, :username, :password)";
		
		$send = $connect->prepare($sql);
		$send->bindParam(':email', $email);
		$send->bindParam(':username', $username);
		$send->bindParam(':password', $password);

		$send->execute();

		echo "Cuenta creada satisfactoriamente!";


		


	}catch(PDOException $e){
		echo "Error: ".$e->getMessage();
	}finally{
		echo "Conexion cerrada";
		$connect = null;
		die();
	}