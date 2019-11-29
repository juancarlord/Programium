<?php include('db.php'); ?>

<?php 
if (isset($_POST['queryTeach'])) {
	
	try{
		$connect = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$user,$pass);
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
								
		print "<p>Usuarios que son profesores </p>";		
		$sql = "SELECT p.NOMBRE, u.NOMBRE, u.APELLIDO, TIMESTAMPDIFF(YEAR,FECHA_NAC,CURRENT_DATE) AS EDAD, u.EMAIL FROM pais p, persona u WHERE u.PROFESOR = 1 ";
		$send = $connect->prepare($sql);		
		$send->execute();

		print "<table border='1'>";
		print "<tr>";
		print "<th>PAIS</th>";
		print "<th>NOMBRE</th>";
		print "<th>APELLIDO</th>";
		print "<th>EDAD</th>";
		print "<th>EMAIL</th>";		
		print "</tr>";
		foreach ($send as $value){
			print "<tr>";	
			print "<td> $value[0] </td>";
			print "<td> $value[1] </td>";
			print "<td> $value[2] </td>";
			print "<td> $value[3] </td>";
			print "<td> $value[4] </td>";			
			print "</tr>";
		}
	} catch(PDOException $e){
		echo "Error: ".$e->getMessage()."<br/>";
	} finally{		
		$connect = null;
		die();
	}
}
 ?>