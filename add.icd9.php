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

$Subject_Code = $_POST['subcode'];
$Subject_Description = $_POST['subdescription'];

$sql = "INSERT INTO subject (Subject_Code, Subject_Description) VALUES ('$Subject_Code', '$Subject_Description')";

	if (!mysqli_query ($con, $sql))
	{
		echo 'not inserted';
	}
	else
	{
		echo '<script type="text/javascript">
		alert("Nowa procedura została dodana poprawnie!");
		location="home.php";
		</script>';
	}


?>
