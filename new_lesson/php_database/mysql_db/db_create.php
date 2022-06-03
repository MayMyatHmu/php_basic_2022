<?php
// create database
include("db_connect.php");
$db_create = "CREATE DATABASE IF NOT EXISTS `laravel`";
$db_create_result = mysqli_query($conn,$db_create);

if ($db_create_result) { 
 echo "Database created successfully";
} else { 
 echo "Faild to create database";
}
?>