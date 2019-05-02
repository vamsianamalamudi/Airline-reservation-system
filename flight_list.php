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
  <h1>Available flights</h1>
</div>
</div>
<div style="margin-left:16px">
<table id='cars'>

 <?php

 if(isset($_GET['dept'])){
        $from = $_GET['dept'];
        $to = $_GET['dest'];
        $date = $_GET['date'];
        echo "<div><h1><center>Departure :</center></h1><b><center> $from</center></b> </div>
        <div><h1><center>Destination :</center></h1><b><center> $to</center></b> </div>
        <div><h1><center>Date :</center></h1><b><center> $date </center></b></div>";
        
 }else{
     echo "data not found";
 }

$conn = new mysqli('localhost','root','','ars2');



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql="CALL GetAllFlights()";
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
    
        if($_GET['dept']==$from && $_GET['dest']==$to)
        {
          //  echo $flight_name  ;
            echo '  <tr>
            <td>'.$flight_name.'</td>
            <td><a href="book.php?edit='.$flight_id.'">
            <input type="button"  name="edit" value="BOOK">
            </td>
            </tr>';
            
            
        }
    
        }
        //the below code is for table format...the above output must come in below format
            ?>
            

            </table>
			
      
			
            
        
    </body>
</html>