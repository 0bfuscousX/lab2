<!DOCTYPE html>
<html>
 <head>
  <title>Riddle Me This?</title>
	<link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/x-icon" href="0bfuscousXLogo.png">	
 </head>
  <body>

<!--NavBar-->
<ul><font face = Candara>
  
  <li class="dropdown">
  <a href="index.php" class="dropbtn">HOME</a>
  </li>

  <li class="dropdown">
  	<a href="javascript:void(0)" class="dropbtn">SOCIALS</a>
    <div class="dropdown-content">
      <a href="https://www.instagram.com/tobaltolim/">Instagram</a>
      <a href="https://discord.gg/W5Fem9s82W">Discord</a>
      <a href="https://steamcommunity.com/profiles/76561198282290849/">Steam</a>
      <a href="https://medal.tv/u/%25c3%2598bfuscousx">Medal</a>
      <a href="https://www.youtube.com/channel/UCSCKgbfi3wsSa05VqHzLgbw">YouTube</a>
    </div></li>
  
 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">MERCHANDISE</a>
    <div class="dropdown-content">
      <a href="https://www.facebook.com/feathersandfurs22">Feathers & Furs Poultry Supply</a>
      <a href="https://streamelements.com/0bfuscousx/tip">MedalxPaypal</a>
	  </div></li>
	
  <li class="dropdown">
  	<a href="javascript:void(0)" class="dropbtn">CONTACT</a>
    <div class="dropdown-content">
      <a href="lvlim@student.apc.edu.ph">Outlook</a>
      <a href="https://www.linkedin.com/in/lorenz-tobias-lim-41872021a/">LinkedIn</a>
      <a href="https://my-learning.w3schools.com">Resources</a>
      <a href="https://my-learning.w3schools.com">Guests</a>	    
    </div></li>
      
</font></ul>

<!--Server Guests Table-->
  <div class="city" title="Who?">
   <font face="Candara">  	
   <h1>NAME:</h1>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mywebprogMI211DB";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT name, email, comment FROM MyGuests";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  echo "<table>";
	  echo "<tr>";
	  echo "<th style='text-align:left; padding: 0 10px'>Name</th>";
	  echo "<th style='text-align:left; padding: 0 10px'>Email</th>";
	  echo "<th style='text-align:left; padding: 0 10px'>Comment</th>";
	  echo "</tr>";
	  while ($row = mysqli_fetch_assoc($result)) {
	      echo "<tr>";
	      echo "<td style='text-align:left; padding: 0 10px'>" . $row["name"] . "</td>";
	      echo "<td style='text-align:left; padding: 0 10px'>" . $row["email"] . "</td>";
	      echo "<td style='text-align:left; padding: 0 10px'>" . $row["comment"] . "</td>";
	      echo "</tr>";
	  }
	  echo "</table>";
	} else {
	  echo "0 results";
	}

	$conn->close();
	?>
  <font face="Candara">  	
  </div>
 </body>
</html>
