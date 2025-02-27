
<?php 
	$host = "localhost";
	$db = "db_usuario";
	$user = "root";
	$pass = "";


	session_start();

	try{
		/*Estable conexion a la BD*/
		$connect = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$user, $pass);
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Conexion exitosa <br>";
		
		/*Insertar registro en la tabla*/
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$professor = $_POST['professor'];
		$birthDate = $_POST['birthDate'];
		$city = $_POST['city'];
		$job = $_POST['job'];
		$interest = $_POST['interest'];
		$email = $_SESSION['userEmail'];

		$sql = "UPDATE persona SET NOMBRE=:firstName, APELLIDO=:lastName, PROFESOR=:professor, FECHA_NAC=:birthDate, INTERES=:interest, CODIGO_CIUDAD=:city, CODIGO_OCUP=:job WHERE EMAIL = :email ";

		$send = $connect->prepare($sql);

		$send->bindParam(":firstName", $firstName);
		$send->bindParam(":lastName", $lastName);
		$send->bindParam(":professor", $professor);
		$send->bindParam(":birthDate", $birthDate);
		$send->bindParam(":city", $city);
		$send->bindParam(":job", $job);
		$send->bindParam(":interest", $interest);
		$send->bindParam(":email", $email);

		$send->execute();

		echo "Datos actualizados correctamente";
		$_SESSION['name']=$firstName;
		header("Location:../index.php");		


	}catch(PDOException $e){
		echo "Error: ".$e->getMessage();
	}finally{
		echo "Conexion cerrada";
		$connect = null;
		die();
	}

	?>
	
	