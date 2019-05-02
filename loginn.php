<?php
session_start();

if(isset($_SESSION['name'])){
//header("Location: loginn.php");
header("Location: home.php");
exit;

}else{
 
    echo "session note set";


}

?>

<!DOCTYPE html>

<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    background-image: url("https://www.desktopbackground.org/p/2015/05/26/954079_aeroplane-hd-wallpapers-hd-wallpaper-backgrounds-of-your-choice_2560x1600_h.jpg");
    background-color: #cccccc;
      /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */

  }


body {font-family: Arial, Helvetica, sans-serif;
 background-size:100% 100%;
 background-repeat: no-repeat;
    }
 
form {

width:80%;
height:100%;
margin:0 auto;
}

label{color:white;
align:center ;
width:30%;
text-align:right;
margin-left:100px;}

label, input {
    /* in order to define widths */
    display: inline-block;
}

label + input {
    width: 30%;
    /* large margin-right to force the next element to the new-line
       and margin-left to create a gutter between the label and input */
    margin: 0 30% 0 4%;
}

input[type=text], input[type=password] {
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
	text-color:white;
    background-color:light-gray;
    color: white;
    padding: 14px 20px;
    border: none;
    cursor: pointer;
    width: 45%;
}

button:hover {
    opacity: 0.8;
    color:black;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 20%;
    border-radius: 25%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}


 screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body bgcolor="black">
<br>
<br>
<br>
<br>
<br>
<br>
<h1 style="color:white; text-align:center; font-family:'Trebuchet MS' " >LOGIN</h1>

<form action="logincheck.php" method = "post" >
 

  <div class="container">
  <br>
  
    <label for="id" style="color:white;"><b>USER_ID</b></label>
    <input type="text" placeholder="Enter Email id" name="username" required><br>

    <label for="psw" style="color:white;"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br>
       
	 <br> 

    <div style="margin-left:445px"> 
   <button class="w3-button w3-black w3-center w3-section w3-right" type="submit" style="background:black;" value="Submit">LOG IN</button>
</div>
   
  </div>
</form>

</body>
</html>

