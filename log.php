<html>
<?php
if(isset($_POST['signin']))
{
session_start();
include "db.php";
$c=trim($_POST["name"]);
$a=trim($_POST["email"]);
$b=trim($_POST["password"]);
$x="select * from signup where Name='$c' and E_mail='$a' and BINARY Password='$b'";
$y=$conn->query($x);
if($y->num_rows==1)
{
$row = $y->fetch_assoc();
$_SESSION["name"]=$row["Name"];
$_SESSION["email"]=$row["E_mail"];
$_SESSION["password"]=$row["Password"];
echo "<script type='text/javascript'>alert('signed in successfully!!!');</script>";
echo "<script type='text/javascript'>window.location.href='cat.php';</script>";
exit();
}
else
{
echo "<script type='text/javascript'>alert('Wrong Username or Password!!!');</script>";
include "signin.php";
}
$conn->close();
}
else
echo "<script type='text/javascript'>window.top.location.href='unauthorised.php';</script>";
?>
</html>