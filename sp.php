

<?php


//$flight_name = $_GET['edit'];
$conn = new mysqli('localhost','root','','ars2');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    
   
    $sql="CALL GetAllFlights()";
    $result=$conn->query($sql);
      
        while ($row = mysqli_fetch_array($result)) 
        {	
          


      echo $row['flight_id'];

        }

        ?>