<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="owner";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['Submit']))
{

    $owner_id=$_POST['owner_id'];
    $owner_name=$_POST['owner_name'];
    $team_id=$_POST['team_id'];
    $team_name=$_POST['team_name'];
    $age=$_POST['age'];
    $dob=$_POST['dob'];
    $q="SELECT owner_id FROM owner WHERE owner_id='$owner_id'";
    $cq=mysqli_query($conn,$q) or die(mysqli_error($conn));
    $ret=mysqli_num_rows($cq);
    if($ret==true)
    {
        echo '<script language="javascript">';
		echo 'alert("OWNER ID ALREADY EXIST");';
		echo 'window.location.href="owner.html";';
		echo '</script>';
        exit();
    
    }
    else
    {
        $query="INSERT INTO owner VALUES('$owner_id','$owner_name','$team_id','$team_name','$age','$dob')";
        mysqli_query($conn,$query) or die(mysqli_error($conn));
        echo '<script language="javascript">';
		echo 'alert("OWNER DETAILS HAS BEEN SUCCESSFULLY SAVED!");';
		echo 'window.location.href="owner.html";';
		echo '</script>';
        exit();
    }
}
    Mysqli_close($conn);
    ?>