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

$Patient_Code = $_POST['patientcode'];
$Patient_name = $_POST['patientname'];

$sql = "INSERT INTO patient (Patient_Code, Patient_name) VALUES ('$Patient_Code', '$Patient_name')";

	if (!mysqli_query ($con, $sql))
	{
		echo 'not inserted';
	}
	else 
	{
		echo '<script type="text/javascript">
		alert("Nowy pacjent został dodany poprawnie!");
		location="home.php";
		</script>';
	}


?>