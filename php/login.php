<?php 
	session_start();
	include('db.php'); ?>
<?php 
	$msg = ""; 
	
	  $email = trim($_POST['email']);
	  $password = trim($_POST['password']);
	  if($email != "" && $password != "") {
	    try {
	      $query = "SELECT * FROM persona WHERE EMAIL=:email AND CONTRASEÑA=:password";

	      $stmt = $connect->prepare($query);
	      $stmt->bindParam('email', $email, PDO::PARAM_STR);
	      $stmt->bindValue('password', $password, PDO::PARAM_STR);
	      $stmt->execute();
	      
	      $count = $stmt->rowCount();
	      $row   = $stmt->fetch(PDO::FETCH_ASSOC);
	      
	      if($count == 1 && !empty($row)) {
	        /******************** Your code ***********************/
	        $_SESSION['sess_user_id']   = $row['USUARIO'];
	        $_SESSION['userEmail'] = $row['EMAIL'];
	        $_SESSION['name'] = $row['NOMBRE'];
	        $_SESSION['admin'] = $row['ADMINISTRADOR'];
	       
			/*header("Location:../logged.php");		*/
			header("Location:../index.php");

	      } else {
	        $msg = "Email o contraseña invalida!";
	      }
	    } catch (PDOException $e) {
	      echo "Error : ".$e->getMessage();
	    } finally{
	    	echo "Conexion cerrada";
			$connect = null;
			die();
	    }
	  } else {
	    $msg = "Ambos campos son requeridos";
	    echo "Conexion cerrada";
	    $connect = null;
	    die();
	  }
	
 ?>