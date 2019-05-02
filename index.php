
<?php
  
  if(isset($_POST['btn-login']))
  {
     $passport_no=$_POST["passport_no"];
     $first_name=$_POST["first_Name"];
     $last_name=$_POST["last_Name"];
	 $user_name=$_POST["user_name"];
     $password=$_POST["password"];
	
    // Create connection

$conn = new mysqli('localhost','root','','ars2');
// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} 

$sql = "INSERT INTO user_details(passport_no,first_name,last_name,user_name,password)
       VALUES('$passport_no','$first_name','$last_name','$user_name','$password')";

       if ($conn->query($sql) ==TRUE) {

       include 'home.php';
 

}

else {
    echo $conn->error;
    }
    //  echo $flight_name  ;
    /*echo '  <tr>
    <td>'.$flight_name.'</td>
    <td><a href="book.php?edit='.$flight_name.'">
    <input type="button"  name="edit" value="BOOK">
    </td>
    </tr>';
*/
$conn->close();
  
}
 ?>

 
  