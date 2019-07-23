<?php 
require("connection.php");
ini_set('max_execution_time', 300);

$type;
$day;
$time;
$hour;
$value;

		$begin = new DateTime( '2019-01-01' );
		$end = new DateTime( '2019-12-31' );
		$end = $end->modify( '+1 day' ); //en caso de que sea Febrero, se añade un día mas entre medio

		$interval = new DateInterval('P1D');
		$daterange = new DatePeriod($begin, $interval ,$end);


//3 iteraciones para el tipo h- t- p
for ($a=1; $a < 4; $a++) { 
	
	$type=$a;
	
	//dia a dia
	foreach($daterange as $date){
    		// $day = $date;
    		
    		//cada 2 horas del dia
    		for ($b=0; $b < 23; $b = $b+2) { 
    			
    			
    			$time = $b;

  
    			if ($type == 1) {
    				$value = rand(0,100);
    			}

    			if ($type == 2) {
    				$value = rand(-30,50);
    			}

    			if ($type == 3) {
    				$value = rand(700,1200);
    			}

    			echo "
    			<p>Tipo: ".$type."</p> <br>
    			<p>Valor: ".$value."</p> <br>
    			<p>Fecha: ".$date->format("Y-m-d") ."</p><br>
    			<p>Hora: ".$time."</p> <br> <p>-------</p><br><br><br>
    			";

    			$result = $date->format('Y-m-d');

				$krr    = explode('-', $result);
				$result = implode("", $krr);

			

    			$sql = 'INSERT INTO data (type, value, date, time)
    			VALUES ('.$type.', '.$value.', '.$result.', '.$time.')';
    			
    			if(mysqli_query($con, $sql)){
    				echo "Se ingreso el registro correctamente";
    			}else{
    				echo "Error: <br>" . mysqli_error($con);
    			}
    		}
	}


	





}



 ?>