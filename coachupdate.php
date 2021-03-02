<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="coach";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die (Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql=$_POST['coach_id'];
if(isset($_POST['update']))
{
    $cn=$_POST['coach_name'];
    $ti=$_POST['team_id'];
    $tn=$_POST['team_name'];
    $ag=$_POST['age'];
    $dob1=$_POST['dob'];
   
    $ci=$_POST['coach_id'];
    $res2="UPDATE $tbl_name set coach_name='$cn',team_id='$ti',team_name='$tn',age='$ag',dob='$dob1'
     where coach_id='$ci'";
    $result=mysqli_query($conn,$res2) or die(mysqli_error($conn));
    header('location:disp.php');
}
?>

<?php 
$ab1=$_POST['coach_id'];
$res1="SELECT * FROM $tbl_name WHERE coach_id='$ab1'";
$result1=mysqli_query($conn,$res1)or die(mysqli_error($conn));
$cn=Mysqli_num_rows($result1);
if($cn==false)
{
    header("Location:dsn.php");
}
else{
    while($row=mysqli_fetch_array($result1))
    {
        $coach_id=$row['coach_id'];
        $coach_name=$row['coach_name'];
        $team_id=$row['team_id'];
        $team_name=$row['team_name'];
        $age=$row['age'];
        $dob=$row['dob'];
        
        }
}
