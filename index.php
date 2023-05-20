
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ORS365 - Logowanie</title>
		<link rel="stylesheet" type="text/css" href="css/login_page.css">
		<link rel="shortcut icon" type="image/x-icon" href="img/logo_ors365.ico" />
		<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/a81368914c.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
	</head>
	<body>
		
		<div class="container">
			<div class="img">
				<img src="img/logo_login.png">
			</div>
			<div class="login-content">
				<form method="post" action="login.php">
					<img src="img/profile_login2.png">
					<h2 class="title">Logowanie</h2>
					<div class="input-div one">
					<div class="i">
							<i class="fas fa-user"></i>
					</div>
					<div class="div">
							
							<input id="username" name="username" type="text" class="input" placeholder="Nazwa użytkownika" required="">
					</div>
					</div>
					<div class="input-div pass">
					<div class="i"> 
							<i class="fas fa-lock"></i>
					</div>
					<div class="div">
							
							<input id="password" name="password" type="password" placeholder="Hasło" class="input" required="">
					</div>
					</div>
					<a href="register.php">Nie masz konta? Zarejestruj się!</a>
					<input type="submit" name="lgn" class="btn" value="Zaloguj">
				</form>
			</div>
		</div>
		<script type="text/javascript" src="js/login_page.js"></script>
	</body>
</html>