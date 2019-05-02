<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body {
    background-image: url("https://www.desktopbackground.org/p/2015/05/26/954079_aeroplane-hd-wallpapers-hd-wallpaper-backgrounds-of-your-choice_2560x1600_h.jpg");
    background-color: #cccccc;
      /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
}
body, html {
    height: 100%;
    font-family: Aorder-box;
}

.bg-img {
    /* The image used */
    

    min-height: 380px;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
	height:60%;
}

/* Add styles to the form container */
.container {
    
    margin: ields */
input[type=text], input[type=password], select , input[type=datetime-local]{
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for the submit button */
.btn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}

.insert{
        echo "The insert function is called.";
     }


.container  label, h1 {
color:white;
}
</style>
</head>
<body style="margin: 100px;">

<div class="card border-success mb-3" style="max-width: 200rem;">
  <div class="card-header bg-transparent border-success"><center>Airline Reservation System</center></div>
  <div class="card-body text-success">



<?php

function insert(){
    echo "The insert function is called.";
 }

$conn = new mysqli('localhost','root','','ars2');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$booking_id = $_GET['edit']; 
echo "<B>BOOKING DETAILS</B>";
//booking table
$sql ="SELECT * FROM `booking_table` WHERE booking_id = '". $booking_id ."' ";
$result=$conn->query($sql);
if (!$result) {  
    echo 'Could not run query: ';
  exit;}
   //echo 'running';
        $row = mysqli_fetch_row($result); 
        

    $user_id=$row[0];
    $trans_id=$row[1];
    $booking_date=$row[2];
    $reporting_time=$row[3];

    $flight_id=$row[5];	 
 
//bootstrap
echo '<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">BOOKING DATE</th>
      <th scope="col">BOOKING ID</th>
      <th scope="col">USER ID</th>
      <th scope="col">TRANSATION ID</th>
      <th scope="col">FLIGHT ID</th>
      <th scope="col">REPORTING TIME</th>
      <th scope="col">CONFIRM BOOKING</th>
     
    </tr>
  </thead>
  ';
 
      echo ' 
      <tbody>
        <tr>
       
        <td>'.$booking_date.'</td> 
        
        <td>'.$booking_id.'</td> 
        <td>'.$user_id.'</td>
        <td>'.$trans_id.'</td> 
        <td>'.$flight_id.'</td> 
        <td>'.$reporting_time.'</td> 
        <td>
        <a href="confirmed.php?booking_id='.$booking_id.'"><button type="button1">
       CONFIRM                                                                                                                              
       </button></a></td>
          
     
       
        
        </tr>
        
        </tbody>
        ';
//surya onclick
  

?>
 

<!-- Modal 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">UPDATED SUCCESSFULLY !</h5>
        <button type="button1" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      USER'S BOOKING HAS BEEN UPDATED SUCCESSFULLY.<br> MESSAGE WILL BE SENT TO USER WITHIN 24 HOURS.<br> 
    
      </div>
      <div class="modal-footer">
        <button type="button1" class="btn btn-dark" data-dismiss="modal">Close</button>
       </div>
    </div>
  </div>
</div>
-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>   