<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
<style>
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
.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: #111;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>



 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>








<!DOCTYPE html>

<html>
<style>
p{
color"black;
background-color:"yellow";
text-align:center;
max-width:50;
}

#cars {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 60%;
    margin: auto;
    position: relative;
}

#cars td, #cars th {
    border: 1px solid #ddd;
    padding: 8px;
}

#cars tr:nth-child(even){background-color: #f2f2f2;}

#cars tr:hover {background-color: #ddd;}

#cars th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: black;
    color: white;
}
</style>
<body>
<div class="w3-container  w3-white w3-teal">


<div style="background-color:aqua;text-align: center;
    padding: 10px;
    margin-bottom: 5px;
    border-radius: 10px;">
  <h1>CANCEL TICKETS</h1>
</div>
</div>
<div style="margin-left:16px">
<table id='cars'>

 
<?php
$conn = new mysqli('localhost','root','','ars2');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql= "SELECT * FROM `booking_table`";
$result=$conn->query($sql);
  if (!$result) {  
    echo 'Could not run query: ';
  exit;}
   //echo 'running';
		
        echo ' <h3><p>Select your flight to cancel booking</p></h3>';        
        while ($row = mysqli_fetch_array($result)) 
        {	
          


        $flight_name=$row['flight_id'];
        $booking_id = $row['booking_id'];
           // $flight_type=$row['flight_type'];
           // $from=$row['from'];
           // $to=$row['to'];
            echo'   <!-- <form action="cancelled.php" method="GET">
           
          <input type="checkbox" name="trans_id" >'.$flight_name.'<br>
          <button type="submit" class="btn btn-primary">CONFIRM CANCEL</button>
        </form>  -->

      
        <h4><CENTER><span class="badge badge-secondary">  <a href=cancelled.php?booking_id='.$booking_id.' >'.$row['flight_id'].' ------'.$row['booking_id'].'</a></span></CENTER></h4>       

        ';

        }
			 
    ?>	
           </table>
			
      
			
            
        
    </body>
</html>
