<?php 
session_start();
if (isset($_GET['log'])) {
    session_destroy();
    header('Location:../restaurant/login.php');
}
?>