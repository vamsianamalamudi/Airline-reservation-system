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
<body >
<div class="card border-success mb-3" style="max-width: 200rem;">
  <div class="card-header bg-transparent border-success"><center>Airline Reservation System</center></div>
  <div class="card-body text-success">


<?php
$first_name = $_GET['edit'];

?>


<div id="vehicletype" style="visibility:hidden;" > <?php echo"$vehicletype"; ?> </div>


<?php
$conn = new mysqli('localhost','root','','ars2');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo '$user_name'
$first_name = $_GET['edit'];

$sql="   SELECT * FROM `user_details` WHERE first_name=  '". $first_name ."'   ";
$result=$conn->query($sql);
  if (!$result) {  
    echo 'Could not run query: ';
  exit;}
   //echo 'running';
		$row = mysqli_fetch_row($result); 
		
		$first_name=$row['0'];
        $last_name=$row['2'];
       	 
    ?>	
    <div class="mx-auto"  style="width: 200px;" <td><br>Flight Name:<?php echo $flight_name;?><br></td></div>
	<div class="mx-auto" style="width: 200px;"  <td><br>Last Name:<?php echo $last_name;?><br></td></div>


    <form  method="POST">
  <div class="form-row" >
    <div class="form-group col-md-6">
      <label for="inputFirstName">First Name</label>
      <input type="text" name="First Name" class="form-control" id="inputFirstName" placeholder=$first_name >
    </div>
    <div class="form-group col-md-6">
      <label for="inputLastName">Last Name</label>
      <input type="text" name="Lastname" class="form-control" id="inputLastName" placeholder= $last_name>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option> karnataka </option>
        <option> Maharashtra </option>
        <option> Gujarat </option>
        <option>Kerala </option>
        <option> Tamil Nadu</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
 
  

  <!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
UPDATE PROFILE
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Your booking has been confirmed !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Thank you for updating your proflie .<br>  
    If you do have any questions in the mean time please do not hesitate to contact us on (080) 2351 8770 or email Vamsi.Yedhu@gmail.com.<br></p>
      </div>
      <div class="modal-footer">
      <? echo '  <tr>
            <td>'.$first_name.'</td>
            <td><a href="home.php ?edit= '.$first_name.'">
            <input type="button" class="btn btn-dark" name="edit" value="UPDATE">
            </td>
            </tr>';
            ?>
       
      
            
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
