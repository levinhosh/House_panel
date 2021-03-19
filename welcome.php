<?php
// Start the session
//require 'signup.php';

//
//register house

echo "<link rel='stylesheet' type='text/css' href='style.css'>";


echo "<table id = house>";
echo"<tr><thead colspan ='4'>Let's register your houses</head></tr>";

echo "<form action = 'hseRegister.php'  method ='POST'>";

echo "<tr><td colspan = '2'>House Name</td><td colspan = '2'><input type='text' name='HseName' /></td></tr>";
echo "<tr><td colspan = '2'>Location</td><td colspan = '2'><input type='text' name='plotLoc' /></td></tr>";
echo "<tr><td colspan = '2'>Number of Rooms</td><td colspan = '2'><input type='number' name='noRooms' /></td></tr>";
echo "<tr><td colspan = '2'>Number of Rooms Occupied</td><td colspan = '2'><input type='number' name='noRoomsoccupied' /></td></tr>";
echo "<tr><td colspan = '2'>Person In charge</td><td colspan = '2'><input type='text' name='caretaker' /></td></tr>";
echo "<tr><td colspan = '2'>Contact</td><td colspan = '2'><input type='number' name='contact' /></td></tr>";
echo "<tr><td colspan = '2'>Cost Per Room</td><td colspan = '2'><input type='number' name='noRoomsCost' /></td></tr>";

echo "<tr><td colspan = '2'>Date</td><td colspan = '2'><input type='date' name='ddmm' /></td></tr>";

echo "<tr><td colspan = '2'>House No</td><td colspan = '2'><input type='number' name='hseID' /></td></tr>";

echo "<tr><td><input type='submit'name='btnhouseSub'><td></tr>";
echo "</form>";
echo "</table";


?>