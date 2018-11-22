<html>
    <head>
    <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #4272C4;
}

li a {
    display: block;
    width: 200px;
    height: 40px;
    background: blue;
    align: right;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    float: right;
    text-align: center;
    margin-bottom: 15px;
    margin-right: 15px;
    

}

li {
    padding-left: 25px;
    margin-top: 15px;
    color: white;
   font-size: 30px;
   text-align: left;

}
.btn {
    background-color: #4272C4; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 2px 2px;
    cursor: pointer;
    margin-left: 20px;
}
.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}
</style>
</head>
<body>
    
<?php
echo "Welcome to Social Vibes!!";

?>


<ul>
<li>Socal Vibes</li>
<li><a class="active" href="#signout">Sign Out</a></li>
</ul>
<br>
<form method="post" action="http://localhost:8080/SocialVibes/Client/dashboard.php" enctype="multipart/form-data">
    <p>Photo:</p>
    <input type="file" name="Filename"> 
    <p>Description</p>
    <textarea rows="10" cols="35" name="Description"></textarea>
    <br/>
    <input TYPE="submit" name="upload" value="Add"/>
</form>
<div>
<?php
require '../Server/connect.php';
$new_username = $_GET['username'];
$query="SELECT * FROM `user_info` WHERE `Email` = '$new_username'";
if($is_query_run=mysql_query($query)){
    $query_execute=mysql_fetch_assoc($is_query_run);
    $firstname=$query_execute['FirstName'];
    $lastname=$query_execute['LastName'];
    $address=$query_execute['Address'];
    $dob=$query_execute['DOB'];
    $city=$query_execute['City'];
    $state=$query_execute['State'];
    $pincode=$query_execute['Pincode'];
   echo "<b>Welcome</b> ".$firstname." ".$lastname."<br>";
   echo "<b>Address:</b> ".$address.", ".$city.", ".$state.", ".$pincode."<br>";
   echo "<b>DOB:</b> ".$dob;
}

?>

</div>
</body>
</html>