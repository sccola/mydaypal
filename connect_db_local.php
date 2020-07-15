<?php
	$servername='localhost';
    $username='mydaypal_db';
    $password='mydaypal_db!';
    $dbname = "mydaypal_db";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>
