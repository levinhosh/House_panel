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
<script src="js/jquery-ui.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script>
<link rel='stylesheet' type='text/css' href='style.css'>

</head>
<body>


<div class="search-container">
<table id ='criteria'><tr><th colspan="2">Select search criteria</th></tr><tr><td colspan="2">
<select name="MySearch">
	<option selected value="">Choose Criteria</option>
	<option  value="">Name Of House</option>
	<option  value="">Location Of House</option>
	<option  value="">Number Of Rooms</option>
	<option  value="">Rooms Occupied</option>
	<option  value="">Owner / Security Agency Incharge</option>
	<option  value="">Contact Of Owner</option>
	<option  value="">Cost Per Room</option>
	<option  value="">Date Of Registration</option>
	<option  value="">House Number</option>
</select>
</td>
</tr>
<td>
    <form action="<?php $PHP_SELF; ?>" method="POST">
      <input type="text" id="search2" placeholder="Search..." name="search2">
</td><td>
      <button type="submit">Submit</button>
    </form>
  </div>



</td>
</tr>
</table>

<?php
$name_of_House = $_POST["search2"];
if ($name_of_House) {

	$sql = "SELECT * FROM house WHERE name = '$name_of_House' OR location = '$name_of_House' OR no_rooms = '$name_of_House' OR rooms_occupied = '$name_of_House' GROUP BY hseId";
if($result = mysqli_query($conn,$sql)){
    if(mysqli_num_rows($result) > 0){
}

}
?>

<table>
            <tr>
                <th>Name of House</th>
                <th>Location Of House</th>
                <th>Number Of Rooms</th>
                <th>Number Of Rooms Occupied</th>
                <th>Date Of Registration</th>
                <th>Owner Contact</th>
                
            </tr>
            <?php
        while($row = mysqli_fetch_array($result)){

        	$HseName = $row["name"];
        	$LocationName = $row["location"];
        	$HseNoRoom = $row["no_rooms"];
        	$Hserooms_occupied = $row["rooms_occupied"];
        	$HseDateCon = $row["DateCon"];
        	$HseCon= $row["contact"];

      		
?>
            <tr>
                <td><?php echo $HseName; ?></td>
                <td><?php echo $LocationName; ?></td>
                <td><?php echo $HseNoRoom; ?></td>
                <td><?php echo $Hserooms_occupied; ?></td>
                <td><?php echo $HseDateCon; ?></td>
                <td><?php echo $HseCon; ?></td>
                
                </tr>
       <?php 
   }
       ?>
        </table>
        
        
        <?php
        // Free result set
        mysqli_free_result($result);
}

?>



</body>
</html>