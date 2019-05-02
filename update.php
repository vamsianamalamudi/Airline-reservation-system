<?php
  
  if(isset($_POST['btn-login']))
  {
     $flight_Name=$_POST["flight_name"];
     $flight_id=$_POST["flight_id"];
     $flight_type=$_POST["flight_type"];
	 $departure=$_POST["departure"];
     $Destination=$_POST["destination"];
     $dep_date=$_POST["dep_date"];
     $dep_time=$_POST["dep_time"];
     $arr_date=$_POST["arr_date"];
     $arr_time=$_POST["arr_time"];
     $no_of_seats=$_POST["no_of_seats"];
	
    // Create connection

$conn = new mysqli('localhost','root','','ars2');
// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} 


  $sql = "UPDATE `flight` SET flight_Name='$flight_Name',flight_type='$flight_type',flight.from='$departure',
                        flight.to='$Destination',dep_date='$dep_date',dep_time='$dep_time',arr_date='$arr_date',arr_time='$arr_time',no_of_seats='$no_of_seats' WHERE flight_id='$flight_id'";

  if ($conn->query($sql) ==TRUE) {
      
       include 'admin_page.php';


}

else {
    echo $conn->error;
    }

  
}
 ?>
