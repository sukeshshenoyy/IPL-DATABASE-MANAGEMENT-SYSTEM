<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="player";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die (Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql=$_POST['player_id'];
if(isset($_POST['update']))
{
    $pn=$_POST['player_name'];
    $ti=$_POST['team_id'];
    $tn=$_POST['team_name'];
    $dob1=$_POST['dob'];
    $ag=$_POST['age'];
    $sk=$_POST['skills'];
    $na=$_POST['nationality'];
    $pi=$_POST['player_id'];
    $res2="UPDATE $tbl_name set player_name='$pn',team_id='$ti',team_name='$tn',dob='$dob1',age='$ag',skills='$sk',nationality='$na'
     where player_id='$pi'";
    $result=mysqli_query($conn,$res2) or die(mysqli_error($conn));
    echo '<script language="javascript">';
    echo 'alert("PLAYER DETAILS UPDATED SUCCESSFULLY");';
    echo 'window.location.href="display.php";';
    echo '</script>';
    exit();
}
?>

<?php 
$ab1=$_POST['player_id'];
$res1="SELECT * FROM $tbl_name WHERE player_id='$ab1'";
$result1=mysqli_query($conn,$res1)or die(mysqli_error($conn));
$cn=Mysqli_num_rows($result1);
if($cn==false)
{
    header("Location:dsn.php");
}
else{
    while($row=mysqli_fetch_array($result1))
    {
        $player_id=$row['player_id'];
        $player_name=$row['player_name'];
        $team_id=$row['team_id'];
        $team_name=$row['team_name'];
        $dob=$row['dob'];
        $age=$row['age'];
        $skills=$row['skills'];
        $nationality=$row['nationality'];
        }
}
