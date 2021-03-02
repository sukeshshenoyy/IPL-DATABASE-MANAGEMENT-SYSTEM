<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="team_match";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['Submit']))
{

    $match_id=$_POST['match_id'];
    $match_date=$_POST['match_date'];
    $team_1=$_POST['team_1'];
    $team_a=$_POST['team_a'];
    $team_2=$_POST['team_2'];
    $team_b=$_POST['team_b'];
    $venue=$_POST['venue'];
    echo "$venue";
    $q="SELECT match_id FROM team_match WHERE match_id='$match_id'";
    $cq=mysqli_query($conn,$q) or die(mysqli_error($conn));
    $ret=mysqli_num_rows($cq);
    if($ret==true)
    {
        echo '<script language="javascript">';
		echo 'alert("MATCH ID ALREADY EXIST");';
		echo 'window.location.href="match.html";';
		echo '</script>';
        exit();
    }
    else
    {
        $query="insert into team_match values ('$match_id','$match_date','$team_1','$team_a','$team_2','$team_b','$venue')";
        
        mysqli_query($conn,$query) or die(mysqli_error($conn));
        echo '<script language="javascript">';
		echo 'alert("MATCH DETAILS HAS BEEN SUCCESSFULLY SAVED!");';
		echo 'window.location.href="match.html";';
		echo '</script>';
        exit();
    }
}
    Mysqli_close($conn);
    ?>