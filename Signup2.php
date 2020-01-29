<?php
$con=mysqli_connect("localhost","root","","abc")
        or die(mysqli_error($con));
session_start();
$username=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$user_registration_query="insert into loginform (username, password)"
        . "values('$username','$password')";

$user_registration_submit=mysqli_query($con,$user_registration_query)
        or die(mysqli_error($con));
echo "User successfully registered";
$_SESSION['username']=$username;
$_SESSION['id']=mysqli_insert_id($con);
?>