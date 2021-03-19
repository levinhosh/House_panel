<!DOCTYPE html>

<html>
<head>
	<title>Know your occupant</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- jQuery library -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script>


</head>


<body id="mainBody">
	<h2 id="firstHead">Who occupies that room?</h2>
	<p >Wish to have all your rooms under control ?</br>
	Look no further we provide you with a platform to do so</p>

<p>Login in To Explore Your options</p>
	<table id="loginTable">
		<form action="view.php" method="POST" class="form-inline">
		<tr>
			<td colspan="2"><thead>Your Credentials are safe with us</thead></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="Email" name="txtEmail" placeholder="Email" />
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="password" name="txtPwd" placeholder="Password" />
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" />
			</td>
			
		</tr>
		<tr>
			<td>Do not have an Account ?</td>
			<td></td>
		</tr>

		</form>
	</table>


<?php

	include "footer.php";

?>

</body>
</html>
