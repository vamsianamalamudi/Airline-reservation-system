<?php

session_start();
$user_id = $_SESSION["id"];

$flight_id = $_POST['flight_id'];


$conn = new mysqli('localhost','root','','ars2');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `booking_table` (`user_id`, `booking_date`, `reporting_time`, `booking_id`, `flight_id`, `CON_REJ`) VALUES ('$user_id','2018-11-22', '08:00:00', NULL, '$flight_id', 'cirnfiv')";

       if ($conn->query($sql) ==TRUE) {
       
       }

       echo mysqli_error($conn);

?>
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
  <h1>confirmed booking</h1>
</div>
</div>

			
            
        
    </body>
</html>


