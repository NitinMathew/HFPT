<html>
<body>
<?php
$names = $_POST['Username'];
$pass = $_POST['Password'];
$browser = $_SERVER['HTTP_USER_AGENT'];


if ($names=="admin" and $pass=="cryptus")
{

header("Location: http://localhost/project/index.html");
}

else
{ 
echo '<script language="javascript">';

echo 'alert("Incorrect Username or Password")';
echo '</script>';
echo($browser."<br>");

die();
}

?>
</body>
</html>
