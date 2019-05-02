<?php
session_start();

if(isset($_SESSION['name'])){
//header("Location: loginn.php");
}else{
  header("Location: loginn.php");
  exit;



}

?>

<!DOCTYPE html">
<html>



<H1><font color="violet"><font face="arial"> AIRLINE RESERVATION</font></H1>
	
	<form action="home.html" method="post">
	
	<head>
            <meta name="viewport" content="width=device-width, initial-scale=2">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            
    <style>
  
* {
  box-sizing: border-box;
}

body {
  font: 16px Arial;  
}

.autocomplete {
  /*the container must be positioned relative:*/
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #e9e9e9; 
}

.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  background-color: DodgerBlue !important; 
  color: #ffffff; 
} 

    body {
    background-image: url("https://www.desktopbackground.org/p/2015/05/26/954079_aeroplane-hd-wallpapers-hd-wallpaper-backgrounds-of-your-choice_2560x1600_h.jpg");
    background-color: #cccccc;
      /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
}
    
        ul { 
    list-style-type: none;
    margin: 0;
    padding:  10;
    overflow: hidden;
    background-color: #ffe6ff;
}

li {
    float: left;
}

li a {
    display: block;
    color: rgb(202, 116, 116);
    text-align: center;
    padding: 14px 16px;
    text-decoration: none; 
}

li a:hover {
    background-color: #111;
}
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}


.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: #111;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}

</style>
</head>

<body style="text-align:center">


<ul>
    <li><img src="src\webpictures\ars.png"  style="width: 50px;height: 50px;"></li>

    
    <li>  
      
    </li>
    
    <li><a href="home.php">BOOK A TICKET</a></li>
    <?php
    $userid = $_SESSION['id'];
    echo '<li><a href="my_flights.php?user_id='.$userid.'">MY TICKET</a></li>
    ';
    ?>
    <li><a href="cancel_flight.php">CANCEL TICKET</a><li> 

  	<div align:"topnav-right" class="dropdown" >
        <button  class="dropbtn" style="float:right"> <img src="src\webpictures\bullet.png" style="width: 50px;height: 20px;">
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="screwit.php">Logout</a>
          <a href="contact.php">Contact</a>
          <a href="aboutus.html">About</a>
        </div>
        
      </div> 



 </ul>


	
	</form>
<div>
    <!--Make sure the form has the autocomplete function switched off:-->
<form autocomplete="off" action="flight_list.php" method="GET">
    <h1>Departure</h1>
    <div class="autocomplete" style="width:300px;">
      <input id="myInput" type="text" name="dept" placeholder="Departure Airport Name">
    </div>
   
   <!--Make sure the form has the autocomplete function switched off:-->
    <h1>Destination</h1>
    <div class="autocomplete" style="width:300px;">
      <input id="myInput1" type="text" name="dest" placeholder="Destination Airport Name">
    </div>
    
  
     <div style= "padding:50px;">

        <!--<input  class="dates form-control"  placeholder="Date" name="date" type="text"> --> 
        <input id="datepicker" type="date" name="date">                       

     </div>                          
        
      									
    
 <input type="submit">
</form>   
        



<script>
        function autocomplete(inp, arr) {
          /*the autocomplete function takes two arguments,
          the text field element and an array of possible autocompleted values:*/
          var currentFocus;
          /*execute a function when someone writes in the text field:*/
          inp.addEventListener("input", function(e) {
              var a, b, i, val = this.value;
              /*close any already open lists of autocompleted values*/
              closeAllLists();
              if (!val) { return false;}
              currentFocus = -1;
              /*create a DIV element that will contain the items (values):*/
              a = document.createElement("DIV");
              a.setAttribute("id", this.id + "autocomplete-list");
              a.setAttribute("class", "autocomplete-items");
              /*append the DIV element as a child of the autocomplete container:*/
              this.parentNode.appendChild(a);
              /*for each item in the array...*/
              for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                  /*create a DIV element for each matching element:*/
                  b = document.createElement("DIV");
                  /*make the matching letters bold:*/
                  b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                  b.innerHTML += arr[i].substr(val.length);
                  /*insert a input field that will hold the current array item's value:*/
                  b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                  /*execute a function when someone clicks on the item value (DIV element):*/
                  b.addEventListener("click", function(e) {
                      /*insert the value for the autocomplete text field:*/
                      inp.value = this.getElementsByTagName("input")[0].value;
                      /*close the list of autocompleted values,
                      (or any other open lists of autocompleted values:*/
                      closeAllLists();
                  });
                  a.appendChild(b);
                }
              }
          });
          /*execute a function presses a key on the keyboard:*/
          inp.addEventListener("keydown", function(e) {
              var x = document.getElementById(this.id + "autocomplete-list");
              if (x) x = x.getElementsByTagName("div");
              if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
              } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
              } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                  /*and simulate a click on the "active" item:*/
                  if (x) x[currentFocus].click();
                }
              }
          });
          function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
          }
          function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
              x[i].classList.remove("autocomplete-active");
            }
          }
          function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
              if (elmnt != x[i] && elmnt != inp) {
                x[i].parentNode.removeChild(x[i]);
              }
            }
          }
          /*execute a function when someone clicks in the document:*/
          document.addEventListener("click", function (e) {
              closeAllLists(e.target);
          });
        }
        
        /*An array containing all the country names in the world:*/
        
        var airports = ["bengaluru","mangalore","delhi","kerala","Chennai","GOA","Trivandrum","Mengaluru","Patiala","Pune"];
        
        
        /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
        autocomplete(document.getElementById("myInput"), airports);
        autocomplete(document.getElementById("myInput1"), airports);
        </script>


</body>
</html>


<?php

 if(isset($_GET['dept'])){
        $from = $_GET['dept'];
        $to = $_GET['dest'];
        $date = $_GET['date'];
        
        echo $from.''.$to.''.$date;
        $result = mysql_query('SELECT to FROM flight WHERE dest = "to"');
if(mysql_num_rows($result) == 0) {
echo " SUCCESS ";
}

 }//else{
    // echo "_ _ ";
 // }

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
    
        
    
        }
        	?>
			
