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

    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
  </div>
 </body>
</html>
