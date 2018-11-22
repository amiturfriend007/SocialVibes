<?php 

$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';

if(!@mysql_connect($mysql_host,$mysql_user,$mysql_password)){
    die("Cannot connect to DB!!");
}
else{
    if(@mysql_select_db('SocialVibesDB')){
        // echo 'connection success';
    }
    else{
        die('cannot connect to DB!!');
    }
}

?>