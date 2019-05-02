	
    



</body>
</html>



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

$flight_name = $_GET['edit'];
echo '<h1><center><b>FLIGHT NAME:</b></center></h1>';echo '<b><h2>'.$flight_name.'</h2></b>';
$conn = new mysqli('localhost','root','','ars2');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql= "DELETE FROM `flight` WHERE flight_name= '$flight_name'";
$result=$conn->query($sql);
  if (!$result) {  
    echo 'Could not run query: ';
  exit;}
  else{

echo '<h1><center><b>Deleted successfully!</b></center></h1>';    
  }
echo mysqli_error($conn);	

       
			 
    ?>

    <a href="home.php"><button class="w3-button w3-black w3-center w3-section w3-right" type="submit" value="Submit">HOME</button></a>
    <a href="admin_page.php"><button class="w3-button w3-black w3-center w3-section w3-right" type="submit"  value="Submit">ADMIN PAGE</button></a>
</body>
</html>


 

 
  