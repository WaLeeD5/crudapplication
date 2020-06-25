<?php
if(!isset($_SESSION['email'])){

    header('location:login.php');
}
session_start();
session_destroy();

header('location:login.php');
?>