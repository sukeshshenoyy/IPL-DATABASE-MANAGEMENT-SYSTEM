<?php
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tb1_name="team";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tb1_name";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$count=mysqli_num_rows($result);
?>
<body bgcolor="powderblue">
<center>
<table width="483" height="96" border="1">
<tr>
<td width="75"><mark>TEAM_ID</mark></td>
<td width="75"><mark>TEAM_NAME</mark></td>

</tr></center></body>
<?php if($count>0)
{
   while($row=mysqli_fetch_assoc($result))
   {
       ?>
   <tr>
   <td>&nbsp;<?php echo $row['team_id'];?></td>
  <td>&nbsp;<?php echo $row['team_name'];?></td>
   </tr>
<?php }
}
else
{
    echo "0 results";
}
$conn-> close(); 
?>