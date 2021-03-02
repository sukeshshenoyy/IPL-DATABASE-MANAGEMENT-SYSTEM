<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tb1_name="team_match";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tb1_name";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['Submit']))
{
    $match_id=$_POST['match_id'];
    $sel="select * from team_match where match_id='$match_id'";
    $cq=mysqli_query($conn,$sel) or die(mysqli_error($conn));
    $ret=mysqli_num_rows($cq);
   if($ret==false)
    {
        echo '<script language="javascript">';
        echo 'alert("MATCH ID DOES NOT EXIST");';
        echo 'window.location.href="matchdelete.php";';
        echo '</script>';
        exit();
   }
   else
    $sel="delete from team_match where match_id ='$match_id'";
    $cq=mysqli_query($conn,$sel)or die(mysqli_error($conn));
    echo '<script language="javascript">';
    echo 'alert("MATCH DETAILS DELETED");';
    echo 'window.location.href="matchdelete.php";';
    echo '</script>';
    exit();
}

Mysqli_close($conn);
?>



<html>
<head>
<body style="background-color:#E5E5E5">
    <div class="container">
<title>registeration form</title>
<link rel="stylesheet" type="text/css" href="updatestyle.css">
</head>
<form action="" method="post">
<table border="0" align ="center">
<tbody>
<tr>
<td><label for="id">Enter Match ID to be deleted :</label></td>
<td><input class="nice" id ="match_id" maxlength="50" name="match_id"type="int"/></td>
</tr>
<tr>
<td align ="center"><input class="centered" name="Submit" type="Submit" value="Delete"/></td>
<td align="center"><input class="centered" type="reset" onClick="refresh()"></td>
</tr>
</tbody>
</table>
</form>
</html>