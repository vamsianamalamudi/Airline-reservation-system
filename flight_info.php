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

$flight_id = $_GET['flight_id'];

//$flight_name = $_GET['edit'];
$conn = new mysqli('localhost','root','','ars2');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    
   
    $sql="SELECT * FROM `flight` WHERE flight_id='". $flight_id ."'";
    $result=$conn->query($sql);
    if (!$result) {  
      echo 'Could not run query: ';
    exit;}
     //echo 'running';
          $row = mysqli_fetch_row($result); 

    
   
     
        
        
            $flight_name=$row[0];
            $flight_id=$row[1];
            $flight_type=$row[2];
            $from=$row[3];
            $to=$row[4];
            $dep_date=$row[5];	 
            $dep_time=$row[6];	
            $arr_date=$row[7];
            $arr_time=$row[8];
       




echo '  <CENTER>EDIT USER DETAILS TO BE UPDATED</CENTER> <form  action="update.php" method="POST">
<div class="form-row" >
  <div class="form-group col-md-6">
    <label for="inputFirstName">FLIGHT Name</label>
    <input type="text" name="flight_name" class="form-control" id="inputFirstName"  value="'.$flight_name.'" disabled>
  </div>
  <div class="form-group col-md-6">
    <label for="inputLastName">FLIGHT ID</label>
    <input type="text" name="flight_id" class="form-control" id="inputFirstName"  value="'.$flight_id.'"disabled>
   
  </div>
</div>
<div class="form-group">
  <label for="inputAddress">FLIGHT TYPE</label>
  <input type="text" name="flight_type"class="form-control" id="inputAddress" value="'.$flight_type.'"disabled>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">FROM</label>
      <input type="text"name="departure" class="form-control" id="inputCity" value="'.$from.'"disabled>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">TO</label>
      <input name="destination" id="inputState"  class="form-control" value="'.$to.'"disabled>
        
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">DEPARTTURE DATE</label>
      <input type="text" name="dep_date" class="form-control" id="inputdd" value="'.$dep_date.'" disabled>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">DEPARTTURE TIME</label>
      <input type="text" name="dep_time" class="form-control" id="inputdt"value="'.$dep_time.'"disabled>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">ARRIVAL DATE</label>
      <input type="text" name="arr_date" class="form-control" id="inputad" value="'.$arr_date.'"disabled>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">ARRIVAL TIME</label>
      <input type="text" name="arr_time" class="form-control" id="inputat" value="'.$arr_time.'"disabled>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">No of eats</label>
      <input type="text" name="no_of_seats" class="form-control" id="inputat" value="'.$arr_time.'"disabled>
    </div>
    
  
';


?>
    
  
  
  
  <!-- Button trigger modal 
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
CONFIRM UPDATE
</button>
-->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Your update has been completed !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Thank you for completing our update over flight.<br>
    A Confirmation letter will be emailed or mailed to user, normally within 24 hour</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
       </div>
    </div>
  </div>
</div>
</form>

</div>

</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
