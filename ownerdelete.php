<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tb1_name="owner";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tb1_name";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['Submit']))
{
    $owner_id=$_POST['owner_id'];
    $sel="select * from owner where owner_id='$owner_id'";
    $cq=mysqli_query($conn,$sel) or die(mysqli_error($conn));
    $ret=mysqli_num_rows($cq);
   if($ret==false)
    {
        echo '<script language="javascript">';
        echo 'alert("OWNER ID DOES NOT EXIST");';
        echo 'window.location.href="ownerdelete.php";';
        echo '</script>';
   }
   else
   {
    $sel="delete from owner where owner_id ='$owner_id'";
    $cq=mysqli_query($conn,$sel)or die(mysqli_error($conn));
    echo '<script language="javascript">';
    echo 'alert("OWNER DETAILS DELETED");';
    echo 'window.location.href="ownerdelete.php";';
    echo '</script>';
    exit();
}
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
<td><label for="id">Enter owner id to be deleted :</label></td>
<td><input class="nice" id ="owner_id" maxlength="50" name="owner_id"type="int"/></td>
</tr>
<tr>
<td align ="center"><input class="centered" name="Submit" type="Submit" value="Delete"/></td>
<td align="center"><input class="centered" type="reset" onClick="refresh()"></td>
</tr>
</tbody>
</table>
</form>
</html>