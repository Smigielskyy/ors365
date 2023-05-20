<?php
    include_once("header.php");
    include_once("navbar.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>ORS365 - Lista godzin</title>
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
        <br><div class="container">

    <?php
        echo "<tr>
                <td>";
        // łączenie do bazy
		$host = "localhost"; 
        $username = "root"; 
        $password = "";
        $database = "ors365"; 

        // selecty bazy
		$conn = mysqli_connect($host,$username,$password,$database) or die(mysqli_error()); 

        $query = ("SELECT * FROM timer");
        $result = mysqli_query($conn,$query) or die(mysqli_error());
            echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                    <tr>
                        <th>Planowana godzina rozpoczęcia</th>
						<th>Planowana godzina zakończenia</th>
                        <th>Czynność</th>
                    </tr>";
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
                echo "<td>" . $row['start_time'] . "</td>";
                echo "<td>" . $row['end_time'] . "</td>";
                echo "<td><form class='form-horizontal' method='post' action='timelist.php'>
                        <input name='id' type='hidden' value='".$row['id']."';>
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
        if(isset($_POST['id']))
        {
            $id = mysqli_real_escape_string($conn,$_POST['id']);
            $sql = mysqli_query($conn,"DELETE FROM timer WHERE id='$id'");
        if(!$sql)
        {
            echo ("Could not delete rows" .mysqli_error());
        }else{
            echo '<script type="text/javascript">
            alert("Godziny zostały pomyślnie usunięte");
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
