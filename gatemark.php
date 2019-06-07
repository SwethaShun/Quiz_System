<html>
<body style="font:bold" >
<h1 align="center" class="style1" style='color:hotpink'>
<tr bgcolor="#072377">
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
<h4 align="center" class="style1" style='color:hotpink'>MARKSHEET</h4><br >
<h5 align="center" class="style2" style='color:salmon'>CONGRATS..!!</h5>
<?php
$answer1=$_POST['question-1-answers'];
$answer2=$_POST['question-2-answers'];
$answer3=$_POST['question-3-answers'];
$answer4=$_POST['question-4-answers'];
$answer5=$_POST['question-5-answers'];
$total = 0;
{
if ($answer1=="D"){$total++;}
if ($answer2=="D"){$total++;}
if ($answer3=="A"){$total++;}
if ($answer4=="B"){$total++;}
if ($answer5=="C"){$total++;}
echo "<h5><div id='results'><center>YOU HAVE SCORED $total / 5 </div></h5>";
}
?>
<br><br>
<h4 align="center" class="style1" style='color:#FF0066'>THANK YOU!!!</h4>
<div style="text-align: center;">
<input style="font-weight: bold; font-size:18; color: ;width:120px;height:60; "
name="signout" value="SIGNOUT" type="submit">
</form>
</div>
</tr>
</body>
</html>