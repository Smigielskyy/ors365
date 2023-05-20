<?php 

$link = mysqli_connect("localhost", "root", "", "ors365");

// sprawdza połączenie z bazą
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "DELETE FROM doctor";
$result = mysqli_query($link, $sql)
if(isset($_GET['delete'])){

    if ($result) {
        echo 'Usunięte!'
    } else {
        echo "Nie usunięte!";
    }
} echo ".";



?>