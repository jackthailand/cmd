  <?php
	$server="localhost";
	$user="root";
	$pass="";
	$db="cmdsarabun";
	$con =new MySQLi($server,$user,$pass,$db);
	if($con->connect_error){
		die("connection failed : ".$con->connect_error);
	}

	$con->set_charset("utf8");
	?>
