<?php

include 'connection.php';
$uMail = $_POST['mail'];	
$uPass = $_POST['pass'];

$q= "SELECT * from lenovo_users WHERE email = '$uMail' and password  = '$uPass'";




$result = mysqli_query($con , $q);

if ( mysqli_num_rows($result) < 0 )
{
			header('location:Profile%20Patient.php');
}
else
{
			header('location:login.php');
	
}



?>