<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="owner";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die (Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql=$_POST['owner_id'];
if(isset($_POST['update']))
{
    $on=$_POST['owner_name'];
    $ti=$_POST['team_id'];
    $tn=$_POST['team_name'];
    $ag=$_POST['age'];
    $dob1=$_POST['dob'];
    $oi=$_POST['owner_id'];
    $res2="UPDATE $tbl_name set owner_name='$on',team_id='$ti',team_name='$tn',age='$ag',dob='$dob1'
     where owner_id='$oi'";
    $result=mysqli_query($conn,$res2) or die(mysqli_error($conn));
    header('location:ownerdisp.php');
}
?>

<?php 
$ab1=$_POST['owner_id'];
$res1="SELECT * FROM $tbl_name WHERE owner_id='$ab1'";
$result1=mysqli_query($conn,$res1)or die(mysqli_error($conn));
$cn=Mysqli_num_rows($result1);
if($cn==false)
{
    header("Location:ownerdsn.php");
}
else{
    while($row=mysqli_fetch_array($result1))
    {
        $owner_id=$row['owner_id'];
        $owner_name=$row['owner_name'];
        $team_id=$row['team_id'];
        $team_name=$row['team_name'];
        $age=$row['age'];
        $dob=$row['dob'];
        
        }
}
