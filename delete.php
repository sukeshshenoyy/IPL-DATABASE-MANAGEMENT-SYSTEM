<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tb1_name="player";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tb1_name";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['Submit']))
{
    $player_id=$_POST['player_id'];
    $sel="select * from player where player_id='$player_id'";
    $cq=mysqli_query($conn,$sel) or die(mysqli_error($conn));
    $ret=mysqli_num_rows($cq);
   if($ret==false)
    {
       echo"<center><h2 style='color:red'>PLAYER ID Does not exists</h2></center>";
   }
   else
    $sel="delete from player where player_id ='$player_id'";
    $cq=mysqli_query($conn,$sel)or die(mysqli_error($conn));
    echo "<center><h3 style='color:red'>Player details deleted </h3></center>";
}

Mysqli_close($conn);
?>



<html>
<head>
<body style="background-color:#E5E5E5">
    <div class="container">
<title>registeration form</title>
<link rel="stylesheet" type="text/css" href="deletestyle.css">
</head>
<form action="" method="post">
<table border="0" align ="center">
<tbody>
<tr>
<td><label for="id">Enter player id to be deleted :</label></td>
<td><input class="nice" id ="id" maxlength="50" name="player_id"type="int"/></td>
</tr>
<tr>
<td align ="center"><input class="centered" name="Submit" type="Submit" value="Delete"/></td>
<td align="center"><input class="centered" type="reset" onClick="refresh()"></td>
</tr>
</tbody>
</table>
</form>
</html>