<!DOCTYPE html>
<?php
require "connect.php";
?>

<html>
<head>
  <title>get details</title>

<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- jQuery library -->
<script src="js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script>


  <link rel='stylesheet' type='text/css' href='style.css'>

</head>
<body>

<!-- *******************************************************  -->




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











  <!-- ************************************************** -->


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

</body>
</html>