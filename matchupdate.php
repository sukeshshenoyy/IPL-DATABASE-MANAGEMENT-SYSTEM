<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="team_match";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die (Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql=$_POST['match_id'];
if(isset($_POST['update']))
{
    $md=$_POST['match_date'];
    $t1=$_POST['team_1'];
    $ta=$_POST['team_a'];
    $t2=$_POST['team_2'];
    $tb=$_POST['team_b'];
    $ve=$_POST['venue'];
   $mi=$_POST['match_id'];
    $res2="UPDATE $tbl_name set match_id ='$mi',match_date='$md',team_1='$t1',team_a='$ta',team_2='$t2',team_b='$tb',venue='$ve' where match_id='$mi'";
    $result=mysqli_query($conn,$res2) or die(mysqli_error($conn));
    echo '<script language="javascript">';
    echo 'alert("DETAILS UPDATED");';
    echo 'window.location.href="matchupdate.html";';
    echo '</script>';
    exit();
}
?>

<?php 
$ab1=$_POST['match_id'];
$res1="SELECT * FROM $tbl_name WHERE match_id='$ab1'";
$result1=mysqli_query($conn,$res1)or die(mysqli_error($conn));
$cn=Mysqli_num_rows($result1);
if($cn==false)
{
    header("Location:dsn.php");
}
else{
    while($row=mysqli_fetch_array($result1))
    { 
        $match_id=$row['match_id'];
        $match_date=$row['match_date'];
        $team_1=$row['team_1'];
        $team_a=$row['team_a'];
        $team_2=$row['team_2'];
        $team_b=$row['team_b'];
        $venue=$row['venue'];
       
        }
}
