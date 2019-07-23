<?php
$con=mysqli_connect("localhost","root","") or DIE("error". mysqli_connect_errno($con));
$db=mysqli_select_db($con,"meteo");
 ?>