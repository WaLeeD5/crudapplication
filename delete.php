<?php 
require('config/config.php');
if(!isset($_SESSION['email'])){

    header('location:login.php');
}

if(isset($_GET['del'])){

    $id = $_GET['del'];
}
$query= "DELETE FROM postdata WHERE id = '$id'";
$result=mysqli_query($con,$query) or die('Error in Deleting');

if($result){

    header('location:index.php');
}

?>