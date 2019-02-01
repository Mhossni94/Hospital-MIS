<?php

include 'connection.php';

$uFirstName =  $_POST['first'];	
$uLastName  =  $_POST['last'];	
$ulanguage  =  $_POST['language'];	
$bDay  =  $_POST['day'];	
$bMonth  =  $_POST['month'];	
$bYear  =  $_POST['year'];	
$uInsurance  =  $_POST['insurance'];	
$uMobile  =  $_POST['mobile'];	
$uId  =  $_POST['id'];	
$uMail  =  $_POST['email'];	
$Utype  =  $_POST['type'];	
ecco "hello";




$q=" INSERT INTO lenovo_users( firstname , lastName , ulanguage , bday , bmonth, byear, insurance, mobileno, nationalID, email, bloodtype ) 
values ( '$uFirstName ' , '$uLastName ' ,  '$ulanguage' , '$bDay ' , '$bMonth' ,  '$bYear  , '$uInsurance' , '$uMobile ,  '$uId  , '$uMail ' , '$Utype)";



mysqli_query( $con ,$q );

?>




