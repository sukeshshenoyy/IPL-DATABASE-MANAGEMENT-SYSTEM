<html>
<head>
<title>Edit Data</title>
<link rel="stylesheet" type="text/css" href="edit.css">
</head>
<body>
<div class="container">
<form name="form1" method="post" action="handle.php">
<table border="0">
<tr>
<td>PLAYER ID :   </td>
<td><input class="nice" type="uniqid" name="player_id" value=""></td>
</tr>
<tr>
<td>PLAYER NAME  :    </td>
<td><input class="nice" type="text" name="player_name" value=""></td>
</tr>
<tr>
<td>TEAM ID :</td>
<td><input class="nice" type="int" name="team_id" value=""></td>
</tr>
<tr>
<td>TEAM NAME :</td>
<td><input class="nice" type="text" name="team_name" value=""></td>
</tr>
<tr>
    <td>DOB :</td>
    <td><input class="nice" type="date_create" name="dob" value=""></td>
    </tr>
<tr>
<td>AGE :</td>
<td><input class="nice" type="int" name="age" value=""></td>
</tr>
<tr>
<td>SKILLS :</td>
<td><input class="nice" type="text" name="skills" value=""></td>
</tr>
<tr>
<td>NATIONALITY :</td>
<td><input class="nice" type="text" name="nationality" value=""></td>
</tr>
<tr>
<td align="center"><input class="centered" type="Submit" name="update" value="Update"></td>
</tr>
</table>
</form>
</body>
</html>
