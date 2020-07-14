<?php
    date_default_timezone_set('Africa/Lagos');
    require'connect_db.php';
    
    // <Location "/add_subscriber.php">
    //     AllowMethods GET POST OPTIONS
    // </Location>

        $email  	= $_POST['email'];
        $verified     = 0;
		
		$sql = "INSERT INTO subscribers (email, verified)
                VALUES ($email, $verified)";

        if ($mysqli->query($sql) === TRUE) {
        echo "New subscriber added successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
        }

        $mysqli->close();
   
?>
