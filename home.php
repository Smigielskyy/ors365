
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>

        <title>ORS365 - Zaplanuj operacje</title>
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

                $hostname = "localhost";
                $username = "root";
                $password = "";
                $databaseName = "ors365";

                $connect = mysqli_connect($hostname, $username, $password, $databaseName);

                $query = "SELECT * FROM `patient`";

                $result1 = mysqli_query($connect, $query);

                $query = "SELECT * FROM `doctor`";
                $result2 = mysqli_query($connect, $query);

                $options = "";

                while($row2 = mysqli_fetch_array($result2))
                {
                    $options = $options."<option>$row2[1]</option>";
                }

                ?>
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
                        <link rel="stylesheet" href="css/ors.css">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        
                    </head>
                    <body>
                        <br><div class="container">
                    
                                <div class="row">
                                <div class="col-lg-6">
                                <div class="jumbotron">
                                    <!--Tutaj możesz ustawić swoje operacje-->
                                <form class="form-horizontal" method= "post" action = "add.home.php">
                                <fieldset>

                                <legend>Zaplanuj operacje</legend>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="doctor">Lekarz prowadzący</label> 
                                        <div class="col-md-5">
                                            <select id="doctor" name="doctor" class="form-control">
                                                <?php echo $options;?>
                                            </select>
                                        </div>
                                    </div>
                            
                                
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="patient">Pacjent</label> 
                                        <div class="col-md-5">
                                            <select  id="patient" name="patient"  class="form-control">
                                                <?php while($row1 = mysqli_fetch_array($result1)):;?>
                                                <option  value="<?php echo $row1[2];?>"><?php echo $row1[2];?></option>
                                                <?php endwhile;?>
                                            </select>
                                        </div>		
                                    </div>
                <?php

                $hostname = "localhost";
                $username = "root";
                $password = "";
                $databaseName = "ors365";

                $connect = mysqli_connect($hostname, $username, $password, $databaseName);

                $query = "SELECT * FROM `rooms`";

                $result1 = mysqli_query($connect, $query);

                $query = "SELECT * FROM `subject`";
                $result2 = mysqli_query($connect, $query);

                $options = "";

                while($row2 = mysqli_fetch_array($result2))
                {
                    $options = $options."<option>$row2[2]</option>";
                }

                ?>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="subject">Operacja</label> 
                                        <div class="col-md-5">
                                            <select  id="subject" name="subject"  class="form-control">
                                                <?php echo $options;?>
                                            </select>
                                        </div>
                                    </div>
                                        <?php while($row2 = mysqli_fetch_array($result2)):;?>
                                        <option value="<?php echo $row2[0];?>"><?php echo $row2[2];?></option>
                                        <?php endwhile;?>
                                    </select> 

                <?php

                $hostname = "localhost";
                $username = "root";
                $password = "";
                $databaseName = "ors365";

                $connect = mysqli_connect($hostname, $username, $password, $databaseName);


                $query = "SELECT * FROM `rooms`";

                $result1 = mysqli_query($connect, $query);

                $query = "SELECT * FROM `rooms`";
                $result2 = mysqli_query($connect, $query);

                $options = "";

                while($row2 = mysqli_fetch_array($result2))
                {
                    $options = $options."<option>$row2[1]</option>";
                }

                ?>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="room">Room</label> 
                                        <div class="col-md-5">
                                            <select  id="room" name="room"  class="form-control">
                                                <?php echo $options;?>
                                            </select>
                                        </div>
                                    </div>
                                        <?php while($row2 = mysqli_fetch_array($result2)):;?>
                                        <option value="<?php echo $row2[0];?>"><?php echo $row2[1];?></option>
                                        <?php endwhile;?>
                                    </select>
                                    
                <?php

                $hostname = "localhost";
                $username = "root";
                $password = "";
                $databaseName = "ors365";

                $connect = mysqli_connect($hostname, $username, $password, $databaseName);

                $query = "SELECT * FROM `timer`";

                $result1 = mysqli_query($connect, $query);

                $query = "SELECT * FROM `timer`";
                $result2 = mysqli_query($connect, $query);

                $options = "";

                while($row2 = mysqli_fetch_array($result2))
                {
                    $options = $options."<option>$row2[1]</option>";
                }

                ?>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="start_time">Planowana godzina zaczęcia</label> 
                                        <div class="col-md-5">
                                            <select  id="start_time" name="start_time" class="form-control">
                                                <?php echo $options;?>
                                                <?php while($row2 = mysqli_fetch_array($result2)):;?>
                                                <option value="<?php echo $row2[0];?>"><?php echo $row2[1];?></option>
                                                <?php endwhile;?>
                                            </select> 
                                        </div>		
                                    </div>

                <?php

                $hostname = "localhost";
                $username = "root";
                $password = "";
                $databaseName = "ors365";

                $connect = mysqli_connect($hostname, $username, $password, $databaseName);

                $query = "SELECT * FROM `timer`";

                $result1 = mysqli_query($connect, $query);

                $query = "SELECT * FROM `timer`";
                $result2 = mysqli_query($connect, $query);

                $options = "";

                while($row2 = mysqli_fetch_array($result2))
                {
                    $options = $options."<option>$row2[2]</option>";
                }

                ?>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="end_time">Planowana godzina zakończenia</label> 
                                        <div class="col-md-5">
                                            <select  id="end_time" name="end_time" class="form-control">
                                                <?php echo $options;?>
                                            </select>
                                        </div>
                                    </div>
                                        <?php while($row2 = mysqli_fetch_array($result2)):;?>
                                        <option value="<?php echo $row2[0];?>"><?php echo $row2[1];?></option>
                                        <?php endwhile;?>

                                    </select>


                                    <div class="form-group"  align="right">
                                        <label class="col-md-4 control-label" for="submit"></label>
                                        <div class="col-md-5">
                                            <button id="submit" name="insert" class="btn btn-primary">Ustaw</button>
                                        </div>
                                    </div>
                                </fieldset>
                                </form>
                    </body>
                </head>
                </html>


</div>            
        </section>
        <script type="text/javascript" src="js/sidebar.js"></script>
    </body>
</html>
