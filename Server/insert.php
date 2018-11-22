<?php
require 'connect.php';

$email=$_POST['email'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$dob=$_POST['dob'];
$address=$_POST['line1']." ".$_POST['line2'];
$city=$_POST['city'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$password=$_POST['password'];

//echo $email.$firstname.$lastname.$dob.$address.$city.$state.$pincode.$password;

$query = "INSERT INTO `user_info`(`Email`, `FirstName`, `LastName`, `DOB`, `Address`, `City`, `State`, `Pincode`, `Password`) VALUES ('$email','$firstname','$lastname','$dob','$address','$city','$state','$pincode','$password')";

$run = mysql_query($query);

if($run==TRUE){
   header("Location: http://localhost:8080/SocialVibes/Client/login.php");
   exit;
}
else{
    echo "Error";
}

?>