<?php
require 'connect.php';

$new_username=$_POST['username'];
$query="SELECT * FROM `user_info` WHERE `Email` = '$new_username'";

if($is_query_run=mysql_query($query)){
    $query_execute=mysql_fetch_assoc($is_query_run);

    $username=$query_execute['Email'];
    $password=$query_execute['Password'];
    
    if(isset($_POST['username'])&&!empty($_POST['username'])&&isset($_POST['password'])&&!empty($_POST['password'])){
        $new_password=$_POST['password'];
        if($new_password==$password){
            header("Location: http://localhost:8080/SocialVibes/Client/dashboard.php?username=$new_username");
            exit;
        }
        else{
            header("Location: http://localhost:8080/SocialVibes/Client/loginError.php");
            exit;
        }
    }
}
else{
    echo "Query Not Executed!";
}

?>