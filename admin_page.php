<?php
session_start();

if(isset($_SESSION['name'])){
//header("Location: loginn.php");
}else{
  header("Location: admin_login.php");
  exit;



}

?>


<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="w3-container  w3-white w3-teal">
<div style="background-color:aqua;text-align: center;
    padding: 10px;
    margin-bottom: 5px;
    border-radius: 10px;">
  <h1>ADMIN PAGE</h1>
</div>
</div>
<div style="margin-left:16px">

<table id='flights'>




<?php

$conn = new mysqli('localhost','root','','ars2');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<B>FLIGHT DETAILS</B>";
//flight table
$sql ="SELECT * FROM `flight`";
$result=$conn->query($sql);

echo '<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">FLIGHT NAME</th>
      <th scope="col">FLIGHT ID</th>
      <th scope="col">FLIGHT TYPE</th>
      <th scope="col">FROM</th>
      <th scope="col">TO</th>
      <th scope="col">DEPARTTURE DATE</th>
      <th scope="col">DEPARTTURE TIME</th>
      <th scope="col">ARRIVAL DATE</th>
      <th scope="col">ARRIVAL TIME</th>
      <th scope="col">ACTION </th>
      <th scope="col">ACTION </th>
      <th scope="col">ACTION </th>
    </tr>
  </thead>
  ';
 
		while ($row = mysqli_fetch_array($result)) 
    {	$flight_name=$row['flight_name'];
        $flight_id=$row['flight_id'];
        $flight_type=$row['flight_type'];
        $from=$row['from'];
        $to=$row['to'];
        $dep_date=$row['dep_date'];	 
        $dep_time=$row['dep_time'];	
        $arr_date=$row['arr_date'];
        $arr_time=$row['arr_time'];
        
        echo ' 
        <tbody>
          <tr>
          <td>'.$flight_name.'</td>
          <td>'.$flight_id.'</td> 
          <td>'.$flight_type.'</td> 
          <td>'.$from.'</td> 
          <td>'.$to.'</td> 
          <td>'.$dep_date.'</td> 
          <td>'.$dep_time.'</td> 
          <td>'.$arr_date.'</td> 
          <td>'.$arr_time.'</td> 
          
          <td><a href="add_flights.php"><button type="submit" class="btn btn-dark">ADD FLIGHTS</button></a></td>
          <td><a href="delete_flight.php"><button type="button" class="btn btn-dark" > DELETE FLIGHTS</button></a></td>
          <td><a href="reschedule.php?flight_id='.$flight_id.'"><button type="button" class="btn btn-dark" > RESCHEDULE FLIGHTS</button></a></td>
          </tr>
          </tbody>
          ';
        }
        echo '</table>';
        //suryaonclick to add_FLIGHTS.php ////suryaonclick to CANCEL_FLIGHTS.php



        echo "<br><B>USER DETAILS</B>";
//user table
$sql ="SELECT * FROM `user_details`";
$result=$conn->query($sql);
//bootstrap
echo '<table class="table">
  <thead class="thead-dark">
    <tr>
    <th scope="col">USER ID</th>
      <th scope="col">FIRST NAME</th>
      <th scope="col">LAST NAME</th>
      <th scope="col">USER NAME</th>
      <th scope="col">PASSWARD</th>
      
      <th scope="col">PASSPORT NO</th>
      <th scope="col">ACTION </th>
    </tr>
  </thead>
  ';
  

  while ($row = mysqli_fetch_array($result)) 
{	
  $user_id=$row['user_id'];
    $first_name=$row['first_name'];
    $last_name=$row['last_name'];
    $user_name=$row['user_name'];
    $password=$row['password'];
    
    $passport_no=$row['passport_no']; 

    echo ' 
<tbody>
  <tr>
  <td>'.$user_id.'</td> 
    <td>'.$first_name.'</td>
    <td>'.$last_name.'</td> 
    <td>'.$user_name.'</td> 
    <td>'.$password.'</td> 
 
    <td>'.$passport_no.'</td> 
    <td><!-- Button trigger modal -->
   <a href="ffuser.php?user_id='.$user_id.'"> <button type="button1" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">BLOCK USER </button></td> </a>
    
  </tr>
  </tbody>
  ';
}
echo '</table>';





echo "<br><B>BOOKING DETAILS</B>";
//booking table
    $sql ="SELECT * FROM `booking_table`";
$result=$conn->query($sql);
//bootstrap
echo '<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">BOOKING DATE</th>
      <th scope="col">BOOKING ID</th>

      <th scope="col">CONFIRM/REJECT BOOKING </th>
    </tr>
  </thead>
  ';
  

  while ($row = mysqli_fetch_array($result)) 
{	
    $booking_date=$row['booking_date'];
   
    $booking_id=$row['booking_id'];
  

 
      echo ' 
      <tbody>
        <tr>
       
        <td>'.$booking_date.'</td> 
        
        <td>'.$booking_id.'</td> 
      
          <td><a href="edit_booking.php?edit='.$booking_id.'">
          <input type="button" class="btn btn-dark" name="edit" value="VIEW"></td>
          
         
          
        </tr>
        </tbody>
        ';
}
echo '</table>';
             
  
?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">BLOCKED SUCCESSFULLY !</h5>
        <button type="button1" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      USER AS BEEN BLOCKED SUCCESSFULLY.<br> MESSAGE WILL BE SENT TO USER WITHIN 24 HOURS.<br> 
    
      </div>
      <div class="modal-footer">
        <button type="button1" class="btn btn-dark" data-dismiss="modal">Close</button>
       </div>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>   

