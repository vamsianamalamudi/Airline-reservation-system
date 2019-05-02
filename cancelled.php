<!DOCTYPE html>
<html>
<?php
$booking_id = $_GET['booking_id'];

$conn = new mysqli('localhost','root','','ars2');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// sql to delete a record
$sql = "DELETE FROM booking_table WHERE booking_id='$booking_id'";

if ($conn->query($sql) === TRUE) {
    echo '<h1>TICKET CANCELED SUCCESSFULLY!</h1>';
} else {
    echo "Error deleting record: " . $conn->error;
}

?>
<head>


<a href="home.php">HOME</a>

</body>
</html>
