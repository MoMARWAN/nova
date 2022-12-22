<?php
$host_db = "localhost";
$username_db = "root";
$password_db = "";
$database_name = "library_db";

$conn = mysqli_connect($host_db,$username_db,$password_db,$database_name);
if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($conn,"SET NAMES utf8");


?>