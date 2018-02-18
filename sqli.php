<?php
$con = mysqli_connect("127.0.0.1","root","","vulnerablewebapp")
if(!$con){
	echo('Connection ERROR');
    die(print(mysqli_error($con)));
}
$query= "SELECT * FROM users WHERE username='" .
        $_POST['username'] . "'AND password='" .
		$_POST['password'] . "'";
$stms=mysqli_query($con,$query);
if($stms === false){
	echo('ERROR during execution:');
	die(print(mysqli_error($con)));
}
$row= mysqli_fetch_array($stms, MYSQLI_ASSOC);
if($row){
	die('logged in');
}
else{
	die('wrong username or password');
}
?>