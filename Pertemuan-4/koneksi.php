<?php

$hostname = "localhost";
$username = "root";
$password = "passwordsql";
$database = "praktikum_web";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn){
    echo "Koneksi Gagal: " . mysqli_connect_error();
    die;
} 