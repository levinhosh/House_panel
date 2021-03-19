<?php
require "connect.php";
session_start();


if(isset($_SESSION['$email'] && $_SESSION['$passwd'])){
print_r($_SESSION);
}

?>