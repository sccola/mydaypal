<?php
$mysqli = new mysqli('localhost', 'root', 'scc@mysql!', 'mydaypal_db');
 
 set_time_limit(12000000);

	if ($mysqli->connect_errno)
	{
	  die("Could not connect to database". $mysqli->connect_error);
	}

?>
