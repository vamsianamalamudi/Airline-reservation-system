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
  <h1>Available flights</h1>
</div>
</div>
<div style="margin-left:16px">
<table id='cars'>
<tr>
 
 </tr>
 <?php

$conn = new mysqli('localhost','root','','ars2');



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql="SELECT * FROM `flight`";
$result=$conn->query($sql);
 
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
    
			?>
			
             
			<tr>
		        <td><?php echo $flight_name ; ?>
				</td>
                <td><a href="book.php?edit=<?php echo $flight_name; ?>"><input type='button'  name='edit' value='BOOK'></td>
			

			</tr>
	
          			
			
			
			
			
  <?php } ?>
  </body>
  </html>
