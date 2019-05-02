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




<div id="vehicletype" style="visibility:hidden;" > <?php echo"$vehicletype"; ?> </div>


<?php
$conn = new mysqli('localhost','root','','ars2');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$flight_id = $_GET['edit'];

$sql="   SELECT * FROM `flight` WHERE flight_id=  '". $flight_id ."'   ";
echo $flight_id;
$result=$conn->query($sql);
  if (!$result) {  
    echo 'Could not run query: ';
  exit;}
   //echo 'running';
		$row = mysqli_fetch_row($result); 
		
		$flight_name=$row['0'];
        $flight_type=$row['2'];
        $from=$row['3'];
        $to=$row['4'];
        $dep_date=$row['5'];
        $dep_time=$row['6'];	 
    // this some cra[]
    
    echo "<div><td><br><center>Flight Name: $flight_name</center><br></td></div>
<div><td><br><center>Flight Type:$flight_type</center><br></td></div>
<div><td><br><center>From:$from</center><br></td></div>
<div><td><br><center>To:$to</center><br></td></div>
  <div><td><br><center>Departure Name:$dep_date</center><br></td></div>
  <div><td><br><center>Departure Time:$dep_time</center><br></td></div>
";

    $sql="SELECT * FROM `user_details`";
    $result=$conn->query($sql);
     
        while ($row = mysqli_fetch_row($result)) 
        {
          $firstname = $row[0];
          $lastname = $row[1];
          $username = $row[2];
          $password = $row[3];
          $user_id = $row[4];
          $passportno = $row[5];  
          $address = $row[6];
          $city = $row[7];
          $state = $row[8];
          $zip = $row[9];
          
        }




echo '   <form  method="POST" action="done.php">
<div class="form-row" >
  <div class="form-group col-md-6">
    <label for="inputFirstName">First Name</label>
    <input type="text" name="first" class="form-control" id="inputFirstName" placeholder="Enter First Name" value="'.$firstname.'">
    <input type="text" name="flight_id" class="form-control" id="inputFirstName" placeholder="Enter First Name" value="'.$flight_id.'">
  </div>
  <div class="form-group col-md-6">
    <label for="inputLastName">Last Name</label>
    <input type="text" name="Lastname" class="form-control" id="inputLastName" placeholder="Enter Last Name" value="'.$lastname.'">
  </div>
</div>
<div class="form-group">
  <label for="inputAddress">Address</label>
  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"value="'.$address.'">
</div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" value="'.$city.'">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <input id="inputState" class="form-control" value="'.$state.'">
        
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip" value="'.$zip.'">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Card NO</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">CVV</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  
';


?>
    
  
  

  <!-- Button trigger modal -->
<button type="submit" class="btn btn-dark" >
CONFIRM BOOKING
</button>
</form>

</div>

</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
