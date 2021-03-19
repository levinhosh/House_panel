<?php

echo "<link rel='stylesheet' type='text/css' href='style.css'>";

// define variables and set to empty values
$email =  $passwd = $emailErr = $pwdErr = "";


      $First_Name = "";
      $Second_Name = "";
      $Email_Name = "";
      $Password_Name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty($_POST["txtEmail"])){
		$emailErr = "Email is required";
	}else {
    $email = test_input($_POST["txtEmail"]);
     // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
	}
  if (empty($_POST["txtPwd"])) {
    $pwdErr = "Password is required";
  } else {
    $passwd = test_input($_POST["txtPwd"]);
    
  }
    
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


require 'connect.php';

$sql = "SELECT fname,sname,email,password FROM landlord WHERE email = '$email' AND password = '$passwd' ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $First_Name = $row["fname"];
      $Second_Name = $row["sname"];
      $Email_Name = $row["email"];
      $Password_Name = $row["password"];

      header("Location:welcome.php");
    }
} else {
    header("Location:register.php");
} 







?>



