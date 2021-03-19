<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<HTML>
<HEAD>
<TITLE>Welcome</TITLE>
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background: #cc00cc;
    margin: 5px;
}



/* Style the tab ********************/
#services {
    /*background-color: #cce5ff;*/
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content li{
    font-family: "Lucida Console";
    color: white;
    padding: 5px 1px;
    text-decoration: none;
    display: block;
}

.dropdown-content li:hover {background-color: #ddd;font-family: "Lucida Console";


}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

/*****************************/
.tab {
    list-style-type: none;
    font-family: "Lucida Console";
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: auto;
}

/* Style the buttons inside the tab */
.tab button {
    font-family: "Lucida Console";
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: auto;
}
</style>
</HEAD>
<BODY>
	<div class="phppot-container">
		<div class="page-header">
			<span class="login-signup"><a href="logout.php">Logout</a></span>
		</div>
		<div class="page-content">
      


</head>
<body>

<p>MY HOUSE PANEL</p>


<li class="tab"><ul>

    <div class="dropdown">
  <button class="tablinks" id="services">Services</button>


  <li class="dropdown-content">
    <ul>
    <button class="tablinks" onclick="openCity(event, 'Register Houses')">Register Houses</button>
    </ul>
    <ul>
    <button class="tablinks" onclick="openCity(event, 'View Houses')">View Houses</button>
    </ul>
    <ul>
    <button class="tablinks" onclick="openCity(event, 'View Rooms')">View Rooms</button>
    </ul>
  </li>

</div>





</ul>
<ul>
  <button class="tablinks" onclick="openCity(event, 'Clients')">Clients</button>
  </ul>
  <ul>
  <button class="tablinks" onclick="openCity(event, 'Contact')">Contact</button>
  </ul>
  <ul>
  <button class="tablinks" onclick="openCity(event, 'About')" id="defaultOpen">About</button>
  </ul>
</li>


<div id="Register Houses" class="tabcontent">
  <h3>Register Your Houses</h3>
<!--********************************************************-->

<table id = house>

<form action = '<?php $PHP_SELF; ?>'  method ='POST'>

<tr><td colspan = '2'>House Name</td><td colspan = '2'><input type='text' name='HseName' /></td></tr>
<tr><td colspan = '2'>Location</td><td colspan = '2'><input type='text' name='plotLoc' /></td></tr>
<tr><td colspan = '2'>Number of Rooms</td><td colspan = '2'><input type='number' name='noRooms' /></td></tr>
<tr><td colspan = '2'>Number of Rooms Occupied</td><td colspan = '2'><input type='number' name='noRoomsoccupied' /></td></tr>
<tr><td colspan = '2'>Person In charge</td><td colspan = '2'><input type='text' name='caretaker' /></td></tr>
<tr><td colspan = '2'>Contact</td><td colspan = '2'><input type='number' name='contact' /></td></tr>
<tr><td colspan = '2'>Cost Per Room</td><td colspan = '2'><input type='number' name='noRoomsCost' /></td></tr>

<tr><td colspan = '2'>Date</td><td colspan = '2'><input type='date' name='ddmm' /></td></tr>

<tr><td colspan = '2'>House No</td><td colspan = '2'><input type='number' name='hseID' /></td></tr>

<tr><td><input type='submit'name='btnhouseSub'><td></tr>
</form>
</table>



<?php


$hoName = test_input($_POST["HseName"]);
 $lo = test_input($_POST["plotLoc"]);
  $nor = test_input($_POST["noRooms"]) ;
   $roomoc = test_input($_POST["noRoomsoccupied"]);
   $care = test_input($_POST["caretaker"]);
   $cont = test_input($_POST["contact"]); 
   $roomcost = test_input($_POST["noRoomsCost"]);
   $myDate = test_input($_POST["ddmm"]);
   $hseID = test_input($_POST["hseID"]);


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


require_once "connect.php";
if(($hoName && $lo &&$nor && $roomoc && $care &&$cont  &&$roomcost &&$myDate &&$hseID) != null){

     
        $sql = "INSERT INTO house (name,location,no_rooms,rooms_occupied,carretaker,contact,cost_p_room,DateCon,hseId) VALUES ('$hoName','$lo',$nor, $roomoc,'$care',$cont,$roomcost,$myDate,$hseID)";
    
        $result = $conn->query($sql);
    if ($result) {
      echo "Saved";


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;


}
}

?>

<!--********************************************************-->
</div>

<div id="View Houses" class="tabcontent">
  <h3>View Registered Houses</h3>
<!--******************************************************-->

<a href="test2.php">Click Here To Perform Your Search</a>


<!--******************************************************-->
</div>

<div id="View Rooms" class="tabcontent">
  <h3>View Registered Rooms</h3>
</div>

<div id="Clients" class="tabcontent">
  <h3>Clients</h3>
  <p>Clients is the capital of France.</p> 
</div>

<div id="Contact" class="tabcontent">
  <h3>Contact</h3>
  <p>Contact is the capital of Japan.</p>
</div>

<div id="About" class="tabcontent">
  <h3>About</h3>
  <p>About is the capital of Japan.</p>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>



<?php

include "footer.php";

?>

































        </div>
	</div>


</BODY>
</HTML>
