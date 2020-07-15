<?php
    date_default_timezone_set('Africa/Lagos');
    
    include_once 'connect_db.php';
    if(isset($_POST['submit']))
    {    
         $email = $_POST['email'];
         $verified     = 0;
        
         $sql = "INSERT INTO subscribers (email,verified)
         VALUES ('$email', '$verified')";
     
         if (mysqli_query($conn, $sql)) {
            echo "Your email been added successfully, You will be contacted !";
         } else {
            if (condition) {
                # code...
            } 
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
            }
         mysqli_close($conn);
    }    
?>
