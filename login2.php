<?php
$username=$_POST['email'];
$password=$_POST['password'];
$con=  mysqli_connect("localhost","root","");
session_start();
$db=mysqli_select_db($con,"abc");
$query=mysqli_query($con,"SELECT * FROM loginform WHERE username='$username' AND password='$password'");
$rows=mysqli_num_rows($query);
if($rows>0)
{
    echo"Login successful";
    $_SESSION['username']=$username;
    header("Location:Productpage.php");
}
else
{
    header("Location:login3.php");        
    echo"Invalid Email/Password";
}
?>