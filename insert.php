<?php
include_once 'db.php';
$Name=$_POST['name'];
$E_mail=$_POST['email'];
$Password=$_POST['password'];
$Re_enter_password=$_POST['reenterpassword'];
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['password'];
$d=$_POST['reenterpassword'];
if($c==$d)
{
mysqli_query($conn,"INSERT into signup values('$Name','$E_mail','$Password','$Re_enter_password')");
echo "<script type='text/javascript'>alert('signed up successfully..!!');</script>";
include "signin.php";
}
else
{
echo"<script type='text/javascript'>alert('password mismatch...!!'); </script>";
include "signup.php";
}
?>