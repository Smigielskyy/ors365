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

$Doctor_Name = $_POST['docname'];
$Spec = $_POST['Spec'];

$sql = "INSERT INTO doctor (doctor_Name, Spec) VALUES ('$Doctor_Name', '$Spec')";

	if (!mysqli_query ($con, $sql))
	{
		echo 'not inserted';
	}
	else 
	{
		echo '<script type="text/javascript">
		alert("Nowy lekarz prowadzący został dodany poprawnie!");
		location="home.php";
		</script>';
	}

?>