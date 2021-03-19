
<?php

echo "<link rel='stylesheet' type='text/css' href='style.css'>";

$emailSignup =  $passwdSignup = $passwdSignup2 = $EmailErr = $pwdErr = $pwdErr2 = "";
$FnameErr = $fname = $SnameErr = $sname = "" ;
$error1 = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


	if (empty($_POST["Fname"] || $_POST["Sname"] || $_POST["signPwd"] || $_POST["signPwd2"] || $_POST["signEmail"])) {
    $error1 = "Please fill in all the required fields";
  } else {
    $fname = test_input($_POST["Fname"]);
    $sname = test_input($_POST["Sname"]);
    $passwdSignup = test_input($_POST["signPwd"]);
    $passwdSignup2 = test_input($_POST["signPwd2"]);
    $emailSignup = test_input($_POST["signEmail"]);
    if (!filter_var($emailSignup, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    
  }

}
	
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


  require 'connect.php'; 

if($passwdSignup == $passwdSignup2){

	//Database *****************************************


	
	$sql = "INSERT INTO landlord (fname,sname,email,password) VALUES ('$fname','$sname','$emailSignup', '$passwdSignup')";
	
  $result = $conn->query($sql);
	if ($result) {
      echo "<p>Sign up was Successful<p>";
      sleep(5);
      header("Location:index.html");

 
    } else{

        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}else{
  echo "<p>The Passwords you provided do not much</p>";
  header("Location:register.php");
  sleep(5);
}


?>