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


<div style="background-color:bluex;text-align: center;
    padding: 10px;
    margin-bottom: 5px;
    border-radius: 10px;">
  <h1>booked tickets</h1>
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


$gotUser = $_GET['user_id'];

$sql="SELECT * FROM `booking_table`";
//$sql="SELECT * FROM `flight`";
$result=$conn->query($sql);
 
		while ($row = mysqli_fetch_array($result)) 
    {	$user_id=$row['user_id'];
       // $trans_id=$row['trans_id'];
        $booking_date=$row['booking_date'];
        $flight_id=$row['flight_id'];
       // $from=$row['from'];
        //$to=$row['to'];
        //$dep_date=$row['dep_date'];	 
        //$dep_time=$row['dep_time'];	
        //$arr_date=$row['arr_date'];
        //$arr_time=$row['arr_time'];
       // $booking_id=$row['booking_id'];
       if($_GET['user_id']==$user_id )
        {
          //  echo $flights  ;
          
            echo '  <tr>
            <td>User ID: '.$user_id.'</td>
            <td>Flight ID:'.$flight_id.'</td>
            <td><a href="flight_info.php?flight_id='.$flight_id.'"><input type="submit" name="btn-login" value="VIEW DETAILS"  required /></a></td>
            </tr>';
            
            
       }
    
        }
        //the below code is for table format...the above output must come in below format
            ?>
            

            </table>
			
      
			
            
        
    </body>
</html>