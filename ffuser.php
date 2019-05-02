<?php
$userid = $_GET['user_id'];

$conn = new mysqli('localhost','root','','ars2');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql= "DELETE FROM user_details WHERE user_id= '$userid'";
$result=$conn->query($sql);
  if (!$result) {  
    echo "failed";
    
  }
  else{


include('admin_page.php');
  }
echo mysqli_error($conn);	

       
			 
?>