<?php 
	

	session_start();
	include('db.php');
	?>
	<?php 
	try{
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
		$_SESSION['displayUser']=$username;
		$_SESSION['userEmail']=$email;
		
		header("Location:../signUp.php");

		
		


	}catch(PDOException $e){
		echo "Error: ".$e->getMessage();
	}finally{
		echo "Conexion cerrada";
		$connect = null;
		die();
	}

	?>
	
	