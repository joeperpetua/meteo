<?php
 require_once("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, 
	initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Meteo</title>
	<link rel="stylesheet" type="text/css" href="estilos/estilos2.css">
	<link rel="stylesheet" type="text/css" href="estilos/menu3.css">
	<link rel="stylesheet" type="text/css" href="fonts.css">
</head>
<body>


<?php 
	
	echo "<h2>Humedad</h2>";
			echo '<table border="1"  style=" width:400px;">
					<tr>
					<th>MES</th>
					<th>PROMEDIO</th>
					</tr>';

	for ($i=0; $i < 13; $i++) { 
		$sql="SELECT AVG(value) FROM data WHERE type = 1 AND date like '%2019-0".$i."-%' ";

		$consulta= mysqli_query($con,$sql);


	

			
					
			
		while ($row = $consulta -> fetch_assoc() ) {

			echo '
						<tr>
						<td>ENERO</td>
						<td>'.$row['AVG(value)'].'</td>
						</tr>';
	}

	}
	

				


		
			echo	'</table>';
		



 ?>


</body>
</html>