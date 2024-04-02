<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST["name"];
    $email = $_POST["email"];
    $jk = $_POST["jk"];
    $nilai = $_POST["nilai"];

    echo "Halo nama saya $nama <br>";
    echo "Ini email saya $email <br>";
    echo "Jenis kelamin saya adalah $jk <br>";
    echo "Ini adalah nilai saya $nilai";
} else {
    echo "Request Denied";
}