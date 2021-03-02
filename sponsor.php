<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="sponsor";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['Submit']))
{

    $sponsor_id=$_POST['sponsor_id'];
    $sponsor_name=$_POST['sponsor_name'];
    $team_id=$_POST['team_id'];
    $q="SELECT sponsor_id FROM sponsor WHERE sponsor_id='$sponsor_id'";
    $cq=mysqli_query($conn,$q) or die(mysqli_error($conn));
    $ret=mysqli_num_rows($cq);
    if($ret==true)
    {
        echo '<script language="javascript">';
		echo 'alert("SPONSOR ID ALREADY EXIST");';
		echo 'window.location.href="sponsorpage.html";';
		echo '</script>';
        exit();
    }
    else
    {
        $query="INSERT INTO sponsor VALUES('$sponsor_id','$sponsor_name','$team_id')";
        mysqli_query($conn,$query) or die(mysqli_error($conn));
       header('Location:avatar.html');
    }
}
    Mysqli_close($conn);
    ?>