<?php
$host="localhost";
$user="root";
$password="";
$db="login";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);

if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from loginform where User='".$uname."'AND Pass='".$password."'
    limit 1";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1){
        header('Location: firstpage.html');
    }
    else{
        echo '<script language="javascript">';
		echo 'alert("INCORRECT PASSWORD");';
		echo 'window.location.href="index.php";';
		echo '</script>';
        exit();
    }

}

?>


<html>
<head>
    <title> Transparent Login Form </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Admin Login </h1>
            <form method="POST" action="#">
           <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
           <input type="submit" name="submit" value="Login">
            
</from>        
</div>
</body>
</html>