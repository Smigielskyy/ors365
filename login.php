<?php
session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username&&$password)
	{
		$conn = mysqli_connect("localhost", "root", "","ors365")or die("couldn't connect to the database!");

		$query = mysqli_query($conn,"SELECT * FROM admin WHERE username='$username'");

		$numrows = mysqli_num_rows($query);

		if($numrows!==0)
		{
			while($row = mysqli_fetch_assoc($query))
			{
				$dbusername = $row['username'];
				$dbpassword = $row['password'];
			}
			if ($username==$dbusername&&($password)==$dbpassword)
			{
				echo '<script type="text/javascript">
				alert("Witaj użytkowniku!");
				location="tablelist.php";
				</script>';
				$_SESSION['username'] = $username;
			}
			else
			echo '<script type="text/javascript">
			alert("Źłe hasło, popraw i spróbuj ponownie!");
			location="index.php";
			</script>';
		}	 
		else
		die('<script type="text/javascript">
		alert("Wprowadzony użytkownik nie istnieje, popraw i spróbuj ponownie!");
		location="index.php";
		</script>');		 

	}
	else 
	die('<script type="text/javascript">
	alert("Proszę wprowadzić nazwę użytkownika oraz hasło!");
	location="index.php";
	</script>');

?>
