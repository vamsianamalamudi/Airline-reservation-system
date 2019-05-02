   <?php

   
$conn = new mysqli('localhost','root','','ars2');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    //FOR CON_REJ
$booking_id = $_GET['booking_id'];

$confirmed = "confirmed";
//$sql = "INSERT INTO booking_table (CON_REJ) VALUES($confirmed);

     $sql =  "UPDATE booking_table SET CON_REJ='confirmed' WHERE booking_id='$booking_id'";

       if ($conn->query($sql) ==TRUE) {
       echo "confirmed success";
       }
       else{

    echo mysqli_error($conn);
       }
     
       ?>
