<?php
    include_once("header.php");
    include_once("navbar.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>ORS365</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                background-image: url();
                background-color: white;
            }
            th {
                text-align: center;
            }
            tr {
                height: 30px;
            }
            td {
                padding-top: 5px;
                padding-left: 20px; 
                padding-bottom: 5px;  
                height: 20px;
            }
        </style>
    </head>
    <body>
        </br><div class="container">

    <?php
        echo "<tr>
                <td>";
        // łącze do bazy
        $host = "localhost"; 
        $username = "root"; 
        $password = "";
        $database = "ors365"; 

        // selecty bazy
        $conn = mysqli_connect($host,$username,$password,$database) or die(mysqli_error()); 

        $query = ("SELECT * FROM doctor");
        $result = mysqli_query($conn,$query) or die(mysqli_error());
            echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                    <tr>
                        <th>Lekarz</th>
                        <th>Specjalizacja</th>
                        <th>Czynność</th>
                    </tr>";
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
                echo "<td>" . $row['doctor_name'] . "</td>";
                echo "<td>" . $row['spec'] . "</td>";
                echo "<td><form class='form-horizontal' method='post' action='doclist.php'>
                        <input name='doctor_id' type='hidden' value='".$row['doctor_id']."';>
                        <input type='submit' class='btn btn-danger' name='delete' value='Usuń'>
                    </form></td>";
            echo "</tr>";
        }
            echo "</table>";

                echo "</td>           
            </tr>";

        // usuwanie rekordów
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
        if(isset($_POST['doctor_id']))
        {
            $doctor_id = mysqli_real_escape_string($conn,$_POST['doctor_id']);
            $sql = mysqli_query($conn,"DELETE FROM doctor WHERE doctor_id='$doctor_id'");
        if(!$sql)
        {
            echo ("Could not delete rows" .mysqli_error());
        }else{
            echo '<script type="text/javascript">
            alert("Lekarz został pomyślnie usunięty");
            location="list.php";
            </script>';
        }
        }
        }

    ?>

    </body>
</html>

<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "footer.php";
    include_once("footer.php");

?>
