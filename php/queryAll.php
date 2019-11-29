

<?php 
if (isset($_POST['queryAll'])) {
	
	try{
		$connect = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$user,$pass);
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
								
		print "<p>Usuarios ordenados por ubicación </p>";		
		$sql = "SELECT p.NOMBRE, e.NOMBRE, c.NOMBRE, u.NOMBRE, u.APELLIDO, TIMESTAMPDIFF(YEAR,FECHA_NAC,CURRENT_DATE) AS EDAD, o.NOMBRE, CASE WHEN u.PROFESOR=1 THEN 'SI' ELSE 'NO' END AS PROFESOR, u.EMAIL FROM pais p, estado e, ciudad c, ocupacion o, persona u WHERE c.CODIGO = u.CODIGO_CIUDAD AND e.CODIGO = c.CODIGO_ESTADO AND p.CODIGO = e.CODIGO_PAIS AND u.CODIGO_OCUP = o.CODIGO ORDER BY E.NOMBRE";
		$send = $connect->prepare($sql);		
		$send->execute();

		print "<table border='1'>";
		print "<tr>";
		print "<th>PAIS</th>";
		print "<th>ESTADO</th>";
		print "<th>CIUDAD</th>";
		print "<th>NOMBRE</th>";
		print "<th>APELLIDO</th>";
		print "<th>EDAD</th>";
		print "<th>OCUPACION</th>";
		print "<th>PROFESOR</th>";
		print "<th>EMAIL</th>";		
		print "</tr>";
		foreach ($send as $value){
			print "<tr>";	
			print "<td> $value[0] </td>";
			print "<td> $value[1] </td>";
			print "<td> $value[2] </td>";
			print "<td> $value[3] </td>";
			print "<td> $value[4] </td>";			
			print "<td> $value[5] </td>";			
			print "<td> $value[6] </td>";			
			print "<td> $value[7] </td>";			
			print "<td> $value[8] </td>";			
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