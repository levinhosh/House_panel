<?php

echo "<link rel='stylesheet' type='text/css' href='style.css'>";

		echo "<table id='signup'>";
		echo "<form action='signup.php' method='POST'>";
		echo"<tr>";
		
			echo"<td colspan='2'><thead>Sign up with your Email</thead></td>";
		echo"</tr>";
		echo"<tr>";
			echo"<td>";
				echo"<input type='text' name='Fname'  placeholder='First Name'/>";
			echo"</td>";
			echo"<td>";
				echo"<input type='text' name='Sname'  placeholder='Second Name'/>";
			echo"</td>";
		echo"</tr>";

		echo"<tr>";
			echo"<td colspan='2'>";
				echo"<input type='text' name='signEmail' placeholder='Email' />";
			echo"</td>";
		echo"</tr>";
		echo"<tr>";
			echo"<td colspan='2'>";
				echo"<input type='Password' name='signPwd' placeholder='Password' />";
			echo"</td>";
		echo"</tr>";
		echo"<tr>";
			echo"<td colspan='2'>";
				echo"<input type='Password' name='signPwd2' placeholder='Confirm Password' />";
			echo"</td>";
		echo"</tr>";

		echo"<tr>";
			echo"<td colspan='2'>";
				echo"<input type='submit' name='btnSignup' />";
			echo"</td>";
			
		echo"</tr>";
		echo"<tr>";
			echo"<td>Already have an Account ?</td>";
		echo"</tr>";

		echo"</form>";
	echo"</table>";

	echo"<p></p>";
echo"</body>";
echo"</html>";

?>