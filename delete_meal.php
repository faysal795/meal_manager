<?php
include 'db.php';

$id=$_GET['id'];
mysqli_query($conn,"DELETE FROM meals WHERE id='$id'");

header("Location: meals.php");
?>