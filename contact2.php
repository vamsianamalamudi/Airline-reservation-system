<?php
  
  session_start();
      $user_id=  $_SESSION["id"];
    // $flight_id=$_POST["flight_id"];
     $country=$_POST["country"];
	 $subject=$_POST["subject"];
	 
	
  
$conn = new mysqli('localhost','root','','ars2');
// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} 

//echo $user_id;

  $sql = "INSERT INTO `contact_table` (`user_id`, `country`, `subject`, `contact_id`) VALUES ('$user_id', '$country', '$subject', NULL)";

  if ($conn->query($sql) ==TRUE) {
      
       include 'home.php';


}

else {
    //echo mysqli_error($conn);
    }

  

 ?>
