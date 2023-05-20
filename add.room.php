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

$Room = $_POST['room'];


$sql = "INSERT INTO rooms (Room) VALUES ('$Room')";

	if (!mysqli_query ($con, $sql))
	{
		echo 'not inserted';
	}
	else
	{
		echo '<script type="text/javascript">
		alert("Nowa sala operacyjna została dodana poprawnie!");
		location="home.php";
		</script>';
	}

?>