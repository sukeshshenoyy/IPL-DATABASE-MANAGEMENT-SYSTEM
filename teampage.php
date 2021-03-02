<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="team";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['Submit']))
{

    $team_id=$_POST['team_id'];
    $team_name=$_POST['team_name'];
    $q="SELECT team_id FROM team WHERE team_id='$team_id'";
    $cq=mysqli_query($conn,$q) or die(mysqli_error($conn));
    $ret=mysqli_num_rows($cq);
    if($ret==true)
    {
        echo '<script language="javascript">';
		echo 'alert("TEAM ID ALREADY EXIST");';
		echo 'window.location.href="teammain.html";';
		echo '</script>';
        exit();
    }
    else
    {
        $query="INSERT INTO team VALUES('$team_id','$team_name')";
        mysqli_query($conn,$query) or die(mysqli_error($conn));
        echo '<script language="javascript">';
		echo 'alert("TEAM DETAILS HAS BEEN SUCCESSFULLY SAVED!");';
		echo 'window.location.href="teammain.html";';
		echo '</script>';
        exit();
    }
}
    Mysqli_close($conn);
    ?>