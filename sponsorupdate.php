<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="sponsor";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die (Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql=$_POST['sponsor_id'];
if(isset($_POST['update']))
{
    $sn=$_POST['sponsor_name'];
    $ti=$_POST['team_id'];
   $si=$_POST['sponsor_id'];
    $res2="UPDATE $tbl_name set sponsor_name='$sn',sponsor_id='$si',team_id='$ti' where sponsor_id='$si'";
    $result=mysqli_query($conn,$res2) or die(mysqli_error($conn));
    echo '<script language="javascript">';
    echo 'alert("DETAILS UPDATED");';
    echo 'window.location.href="sponsorupdate.html";';
    echo '</script>';
    exit();
}
?>

<?php 
$ab1=$_POST['sponsor_id'];
$res1="SELECT * FROM $tbl_name WHERE sponsor_id='$ab1'";
$result1=mysqli_query($conn,$res1)or die(mysqli_error($conn));
$cn=Mysqli_num_rows($result1);
if($cn==false)
{
    echo '<script language="javascript">';
    echo 'alert("SPONSOR ID DOES NOT EXIST");';
    echo 'window.location.href="sponsorupdate.html";';
    echo '</script>';
    exit();
}
else{
    while($row=mysqli_fetch_array($result1))
    { 
        $sponsor_id=$row['sponsor_id'];
        $sponsor_name=$row['sponsor_name'];
        $team_id=$row['team_id'];
       
        }
}
