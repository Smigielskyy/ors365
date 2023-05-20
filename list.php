
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>

        <title>ORS365 - Panel edycji</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" type="image/x-icon" href="img/logo_ors365.ico" />
        <link rel="stylesheet" href="css/style.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>

        <div class="sidebar">
            <div class="logo-details">
                <i class='bx bxl-c-plus-plus icon'></i>
                <div class="logo_name">ORS365</div>
                <i class='bx bx-menu' id="btn" ></i>
            </div>
            <ul class="nav-list">

                <li>
                    <i class='bx bx-search' ></i>
                    <input type="text" placeholder="Wyszukaj...">
                    <span class="tooltip">Szukaj</span>
                </li>

                <li>
                    <a href="tablelist.php">
                        <i class="fa-solid fa-house"></i>
                        <span class="links_name">Kalendarz operacji</span>
                    </a>
                    <span class="tooltip">Kalendarz operacji</span>
                </li>

                <li>
                    <a href="home.php">
                        <i class="fa-solid fa-calendar-plus"></i>
                        <span class="links_name">Zaplanuj operacje</span>
                    </a>
                    <span class="tooltip">Zaplanuj operacje</span>
                </li>

                <li>
                    <a href="adddoctor.php">
                        <i class="fa-solid fa-users"></i>
                        <span class="links_name">Lekarze</span>
                    </a>
                    <span class="tooltip">Lekarze</span>
                </li>

                <li>
                    <a href="addpatient.php">
                        <i class="fa-solid fa-hospital-user"></i>
                        <span class="links_name">Pacjenci</span>
                    </a>
                    <span class="tooltip">Pacjenci</span>
                </li>

                <li>
                    <a href="addicd9.php">
                        <i class="fa-solid fa-file-circle-plus"></i>
                        <span class="links_name">Procedury ICD-9</span>
                    </a>
                    <span class="tooltip">Procedury ICD-9</span>
                </li>

                <li>
                    <a href="addroom.php">
                        <i class="fa-solid fa-network-wired"></i>
                        <span class="links_name">Sale operacyjne</span>
                    </a>
                    <span class="tooltip">Sale operacyjne</span>
                </li>
                
                <li>
                    <a href="addtime.php">
                        <i class="fa-solid fa-clock"></i>
                        <span class="links_name">Czas operacji</span>
                    </a>
                    <span class="tooltip">Czas operacji</span>
                </li>

                <li>
                    <a href="list.php">
                        <i class="fa-sharp fa-solid fa-trash"></i>
                        <span class="links_name">Panel edycji</span>
                    </a>
                    <span class="tooltip">Panel edycji</span>
                </li>

                <li>
                    <a href="settings.php">
                        <i class="fa-solid fa-gear"></i>
                        <span class="links_name">Ustawienia</span>
                    </a>
                    <span class="tooltip">Ustawienia</span>
                </li>
            </ul>

            <li class="profile">
                <div class="profile-details">
                    <img src="img/dashboard_profile_pic.png" alt="profileImg">
                    <div class="name_job">
                        <div class="name">Dominik Śmigielski</div>
                        <div class="job">Administrator</div>
                    </div>
                    <a href="index.php">
                    <i class="fa-solid fa-right-from-bracket" id="log_out"></i>
                </div>
                
            </li>
        
        </div>


        <section class="home-section">
            <div class="text">

				<?php
					$path = $_SERVER['DOCUMENT_ROOT'];
					$path .= "header.php";
					include_once("header.php");
					include_once("navbar.php");
				?>
				<!DOCTYPE html>
								<html lang="en" dir="ltr">
									<head>
										<title>ORS365</title>
										<meta charset="UTF-8">
										<meta name="viewport" content="width=device-width, initial-scale=1.0">
										<link rel="stylesheet" href="css/tablelist.css">
									</head>
									<body>
										<div align="center">
											<legend>Lista lekarzy prowadzących</legend></fieldset>
												<?php
													include_once("doclist.php");
												?>
											<br>
											<br>
											<br>
											<br>
										</div>

										<div align="center">
											<legend>Lista pacjentów operacyjnych</legend></fieldset>
												<?php 
												include_once("patientlist.php");
												?>
											<br>
											<br>
											<br>
											<br>
										</div>

										<div align="center">
											<legend>Lista procedur operacji</legend></fieldset>
												<?php 
												include_once("sublist.php");
												?>
											<br>
											<br>
											<br>
											<br>
										</div>

										<div align="center">
											<legend>Lista sal operacyjnych</legend></fieldset>
												<?php
													include_once("roomlist.php");
												?>
											<br>
											<br>
											<br>
											<br>
										</div>

										<div align="center">
											<legend>Lista godzin operacji</legend></fieldset>
												<?php
													include_once("timelist.php");
												?>
										</div>

				<?php
					include_once("footer.php");
					include_once("navbar.php");
				?>

			</div>            
        </section>
        <script type="text/javascript" src="js/sidebar.js"></script> 
    </body>
</html>
