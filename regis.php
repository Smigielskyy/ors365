<?php 

$con = mysqli_connect ("localhost", "root", "","ors365");

if (!$con)
{
	echo 'not connected to server';
}
if (!mysqli_select_db($con, 'ors365'))
{
	echo 'database not selected';
}

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";

if (!mysqli_query ($con, $sql))
{
	echo 'Nie zarejestrowano!';
}
else 
{
	echo '<script type="text/javascript">
	alert("Witaj! Twoje konto zostało założone. Zaloguj się, aby korzystać z systemu ORS365!");
	location="index.php";
	</script>';
}


?>