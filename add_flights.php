<!DOCTYPE html>
<html>
<head>
<style type="text/css">

 input[type="text"], input[type="password"] {
    width: 75%;
    padding: 10px 20px;
    margin: 10px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
	 input[type="user_name"], input[type="password"] {
    width: 75%;
    padding: 10px 20px;
    margin: 10px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}


input[type="Submit"] {
	text-color:red;
    background-color: red;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}
div{width:400px;
margin-left:440px;
} 
     

body {
    background-image: url("https://www.desktopbackground.org/p/2015/05/26/954079_aeroplane-hd-wallpapers-hd-wallpaper-backgrounds-of-your-choice_2560x1600_h.jpg");
    background-color: #cccccc;
      /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
}


</style>


<h2 style="color:white; font-family: GrutchShaded; text-align:center;">ADMIN LOGGED IN</h2>
<h3 style="color:red; font-family: GrutchShaded; text-align:center;">ENTER FLIGHTS DETAILS</h3>
<body style="text-align:center">
	<form action="add_flights2.php" method ="Post">
	
	<center>
		<table align="center">
        <tr>
			<th><font color="white">Flight Name : </font></th>
			<td><input type="text" name="flight_Name"   /></td>
        </tr>
    <!--    
		<tr>
            
			<th><font color="white">Flight Id : </font> </th>
			<td><input type="text" name="flight_id"  /></td>
        </tr>
        
		
		-->
		<tr>
			<th><font color="white">flight type : </font> </th>
			<td><input type="text" name="flight_type"   /></td>
		</tr>
		
		<tr>
			<th><font color="white">Departure :  </font></th>
			<td><input type="text" name="departure"  /></td>
		</tr>
		
		<tr>
			<th><font color="white">Destination :  </font></th>
			<td><input type="text" name="Destination"  /></td>
		</tr>
		
        
        <tr>
			<th><font color="white">dep_date :  </font></th>
			<td><input type="text" name="dep_date"  /></td>
        </tr>
        <tr>
			<th><font color="white">dep_time :  </font></th>
			<td><input type="text" name="dep_time"  /></td>
        </tr>
        <tr>
			<th><font color="white">arrival Date :  </font></th>
			<td><input type="text" name="arr_date"  /></td>
        </tr>
        <tr>
			<th><font color="white">Arrival Time :  </font></th>
			<td><input type="text" name="arr_time"  /></td>
        </tr>
        
		<tr>
			<th><font color="white">No Of Seats :  </font></th>
			<td><input type="text" name="no_of_seats"  /></td>
        </tr>
        
		
		<tr>
			<td>
				<input type="submit" name="btn-login" value="ADD FLIGHT"  required />
				
			</td>
		</tr>
		
	</table>
	</center>

			  
	
	
	</form>
	
</body>
</html>



 

 
  