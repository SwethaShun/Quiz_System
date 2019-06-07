<html>
<body style="font:bold">
<style>
body
{
background-image:url("images.jpg");
height:100%;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}
</style>
<form action="signin.php" method="post"><br/><br/>
<h1 align="center" class="style1" style='color:hotpink'>
<h1 align="center" class="style1" style='color:hotpink'>MARKSHEET</h1><br>
<h3 align="center" class="style2" style='color:salmon'>CONGRATS..!!</h3>
<?php
$answer1=$_POST['question-1-answers'];
$answer2=$_POST['question-2-answers'];
$answer3=$_POST['question-3-answers'];
$answer4=$_POST['question-4-answers'];
$answer5=$_POST['question-5-answers'];
$total = 0;
{
if ($answer1=="D"){$total++;}
if ($answer2=="B"){$total++;}
if ($answer3=="B"){$total++;}
if ($answer4=="D"){$total++;}
if ($answer5=="A"){$total++;}
echo "<center><div id='results'>$total / 5 CORRECT</div>";
}
?>
<br><br><br>
<h4 align="center" class="style1" style='color:#FF0066'>THANK YOU!!!</h4><br>
<br><div style="text-align: center;">
<input style="font-weight: bold; font-size:18; color: ;width:120px;height:60; background-color:" name="signout" value="SIGNOUT" type="submit">
</form>
</div>
</body>
</html>