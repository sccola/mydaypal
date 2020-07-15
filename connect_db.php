<?php
	$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

  $server = $url["host"];
  $username = $url["user"];
  $password = $url["pass"];
  $db = substr($url["path"], 1);
  
  // $conn = new mysqli($server, $username, $password, $db);
  $conn = mysqli_connect($server, $username, $password, $db);

  // $conn=mysqli_connect($servername,$username,$password,"$dbname");
      
  if(!$conn){
    die('Could not Connect MySql Server:' .mysql_error());
  }
?>
