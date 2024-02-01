<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Kết nối db thất bại!");
}
?>