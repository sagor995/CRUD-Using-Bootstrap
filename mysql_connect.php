<?php
	$mysqli= new mysqli('localhost','root','','data_bootstrap');
	if ($mysqli->connect_errno()) {
		echo "Problem".mysqli->connect_error;
	}


?>
