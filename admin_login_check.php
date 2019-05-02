
<?php
echo $myadminusername = $_POST['adminusername'];
echo $myadminpassword = $_POST['adminpassword']; 

// Create connection
$conn = new mysqli('localhost','root','','ars2');

//$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




$sql="SELECT * FROM admin_details WHERE admin_user_name='$myadminusername'";
//$sql = "SELECT * FROM tbl_Freelancers WHERE User_Username = '".$username."'";

if ($result=mysqli_query($conn,$sql))
{
// Fetch one and one row
$row=mysqli_fetch_array($result);
if($myadminusername == $row['0']){
    //echo $row['adminname'];
    if($myadminpassword==$row['1']){

        session_start();
        $_SESSION["name"] = $row['0'];
        $_SESSION["password"] =$row['1'];
        $_SESSION["id"] =$row['2'];
     header("Location: admin_page.php");
     exit;
    }
    else{
        header("Location: admin_login.php");
        exit;
      }
    }
    else{
        header("Location: admin_login.php");
        exit;
    }
    
}


?>
  
