<?php
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tb1_name="owner";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tb1_name";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$count=mysqli_num_rows($result);
?>
<html><head><style>
    #plyrs {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: left;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 6px 2px;
  cursor: pointer;
}
#plyrs td, #plyrs th {
  border: 1px solid #ddd;
  padding: 8px;
}

#plyrs tr:nth-child(even){background-color: #f2f2f2;}

#plyrs tr:hover {background-color: #ddd;}

#plyrs th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: right;
  background-color: #4CAF50;
  color: white;
}
</style>
<body bgcolor="powderblue">
<center>
<table id ="plyrs" width="483" height="106" border="1">
<tr>
<td width="90"><mark>OWNER_ID</mark></td>
<td width="90"><mark>OWNER_NAME</mark></td>
<td width="90"><mark>TEAM_ID</mark></td>
<td width="90"><mark>TEAM_NAME</mark></td>
<td width="90"><mark>AGE</mark></td>
<td width="90"><mark>Date_Of_Birth</mark></td>


</tr></center></body></head>
<?php if($count>0)
{
   while($row=mysqli_fetch_assoc($result))
   {
       ?>
   <tr>
   <td>&nbsp;<?php echo $row['owner_id'];?></td>
  <td>&nbsp;<?php echo $row['owner_name'];?></td>
  <td>&nbsp;<?php echo $row['team_id'];?></td>
   <td>&nbsp;<?php echo $row['team_name'];?></td>
   <td>&nbsp;<?php echo $row['age'];?></td>
   <td>&nbsp;<?php echo $row['dob'];?></td>
   </tr>
<?php }
}
else
{
    echo "0 results";
}
$conn-> close(); 
?>