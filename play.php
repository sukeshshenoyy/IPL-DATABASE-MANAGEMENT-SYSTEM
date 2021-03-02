<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="player";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['Submit']))
{

    $player_id=$_POST['player_id'];
    $player_name=$_POST['player_name'];
    $team_id=$_POST['team_id'];
    $team_name=$_POST['team_name'];
    $dob=$_POST['dob'];
    $age=$_POST['age'];
    $skills=$_POST['skills'];
    $nationality=$_POST['nationality'];
    $q="SELECT player_id FROM player WHERE player_id='$player_id'";
    $cq=mysqli_query($conn,$q) or die(mysqli_error($conn));
    $ret=mysqli_num_rows($cq);
    if($ret==true)
    {
        echo '<script language="javascript">';
		echo 'alert("PLAYER ID ALREADY EXIST");';
		echo 'window.location.href="players.html";';
		echo '</script>';
        exit();
    }
    else
    {
        $query="INSERT INTO player VALUES('$player_id','$player_name','$team_id','$team_name','$dob','$age','$skills','$nationality')";
        mysqli_query($conn,$query) or die(mysqli_error($conn));
        echo '<script language="javascript">';
		echo 'alert("PLAYER DETAILS HAS BEEN SUCCESSFULLY SAVED!");';
		echo 'window.location.href="players.html";';
		echo '</script>';
        exit();
    }
}
    Mysqli_close($conn);
    ?>