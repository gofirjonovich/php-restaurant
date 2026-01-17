<?php  
$server="localhost";
$user="root";
$password="root";
$dbName="restaurant";
$connect=mysqli_connect($server, $user, $password, $dbName);
if (!$connect) {
    echo "Bazaga ulanishda xatolik".mysqli_connect_error($connect);
}


?>