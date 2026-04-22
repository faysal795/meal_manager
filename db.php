<?php
$conn = mysqli_connect("localhost", "root", "", "meal_db");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

session_start();
?>