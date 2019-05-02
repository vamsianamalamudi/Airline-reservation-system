
?>
<?php
echo $myusername = $_POST['username'];
echo $mypassword = $_POST['password']; 

// Create connection
$conn = new mysqli('localhost','root','','ars2');

//$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




$sql="SELECT * FROM user_details WHERE user_name='$myusername'";
//$sql = "SELECT * FROM tbl_Freelancers WHERE User_Username = '".$username."'";

if ($result=mysqli_query($conn,$sql))
{
// Fetch one and one row
$row=mysqli_fetch_array($result);

if($myusername == $row['2']){

//echo $row['adminname'];
if($row['3']==$mypassword){
    echo "welcome Biatch";
    
        session_start();
        $_SESSION["name"] = $row['2'];
        $_SESSION["password"] =$row['3'];
        $_SESSION["id"] =$row['4'];
         
        header("Location: home.php");
        exit;
      
      }
      else{
        header("Location: loginn.php");
        exit;
      }
    }
    else{
        header("Location: loginn.php");
        exit;
    }
    
}


?>
  
