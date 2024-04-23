<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <h1>Praktikum Form Handling</h1>
    <form action="" method="post">
        <label for="name">Nama</label><br>
        <input type="text" name="name"><br>
        <label for="name">Email</label><br>
        <input type="email" name="email"><br>
        <label for="name">Jenis Kelamin</label><br>
        <input type="radio" name="jk" value="Laki-Laki">Laki-laki<br>
        <input type="radio" name="jk" value="Perempuan">Perempuan<br>
        <label for="name">Nilai</label><br>
        <input type="number" name="nilai"><br>
        <input type="submit" name="submit"><br>
    </form>
</body>
<?php

if(isset($_POST["submit"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $jk = $_POST["jk"];
        $nilai = $_POST["nilai"];
    
        echo "Halo nama saya $name <br>";
        echo "Ini email saya $email <br>";
        echo "Jenis kelamin saya adalah $jk <br>";
        echo "Ini adalah nilai saya $nilai";
    } else {
        echo "Request Denied";
    }
}