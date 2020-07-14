<?php
$mysqli = new mysqli('localhost', 'dbuser', 'dbuser123', 'mydaypaldb');
 
 set_time_limit(12000000);

	if ($mysqli->connect_errno)
	{
	  die("Could not connect to database". $mysqli->connect_error);
	}

?>
