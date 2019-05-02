<!DOCTYPE html>
<html>
<head>
<style type="text/css">

 input[type="text"], input[type="password"] {
    width: 75%;
    padding: 10px 20px;
    margin: 10px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
	 input[type="user_name"], input[type="password"] {
    width: 75%;
    padding: 10px 20px;
    margin: 10px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}


input[type="Submit"] {
	text-color:red;
    background-color: red;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}
div{width:400px;
margin-left:440px;
} 
     

body {
    background-image: url("https://www.desktopbackground.org/p/2015/05/26/954079_aeroplane-hd-wallpapers-hd-wallpaper-backgrounds-of-your-choice_2560x1600_h.jpg");
    background-color: #cccccc;
      /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
}


</style>


<h2 style="color:white; font-family: GrutchShaded; text-align:center;">FLIGHT DELETION</h2>
<h3 style="color:red; font-family: GrutchShaded; text-align:center;">SELECT FLIGHT TO BE DELETED</h3>
<body style="text-align:center">



<?php
$conn = new mysqli('localhost','root','','ars2');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql= "SELECT * FROM `flight`";
$result=$conn->query($sql);
  if (!$result) {  
    echo 'Could not run query: ';
  exit;}
   //echo 'running';
		
        echo ' <p>Select your flight to be removed</p>';        
        while ($row = mysqli_fetch_array($result)) 
        {	
          
            $flight_name=$row['flight_name'];
            $flight_id=$row['flight_id'];
            $flight_type=$row['flight_type'];
            $departure=$row['from'];
            $Destination=$row['to'];
            $dep_date=$row['dep_date'];
            $dep_time=$row['dep_time'];
            $arr_date=$row['arr_date'];
            $arr_time=$row['arr_time'];
            $no_of_seats=$row['no_of_seats'];


         
            //  echo $flight_name  ;
            echo '  <tr>
            <td>'.$flight_name.'</td>
            <td><a href="deleted_flight.php?edit='.$flight_name.'">
            <input type="button"  name="edit" value="DELETE"><br>
            </td>
            </tr>';
           
         

        }
			 
    ?>	

	
</body>
</html>


 

 
  


