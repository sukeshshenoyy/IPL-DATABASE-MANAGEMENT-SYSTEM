<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="city";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['Submit']))
{

    $city_id=$_POST['city_id'];
    $city_name=$_POST['city_name'];
    $team_id=$_POST['team_id'];
    $q="SELECT city_id FROM city WHERE city_id='$city_id'";
    $cq=mysqli_query($conn,$q) or die(mysqli_error($conn));
    $ret=mysqli_num_rows($cq);
    if($ret==true)
    {
        echo '<script language="javascript">';
        echo 'alert("CITY ID ALREADY EXIST");';
        echo 'window.location.href="citypage.html";';
        echo '</script>';
     exit();
    }
    else
    {
        $query="INSERT INTO city VALUES('$city_id','$city_name','$team_id')";
        mysqli_query($conn,$query) or die(mysqli_error($conn));
       header('Location:sponsorpage.html');
    }
}
    Mysqli_close($conn);
    ?>