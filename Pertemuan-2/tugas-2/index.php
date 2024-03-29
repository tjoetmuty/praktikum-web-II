<?php

//1. associative array tentang diri minimal 10 key

$muty = array("full name" => "Tjoet Muty Ahmad", 
            "nick name" => "muty", 
            "age" => 19, 
            "hobby" => "swimming", 
            "languages" => "indonesia, english",
            "major" => "informatics engineering",
            "semester of study" => 4,
            "fav foods" => "soto betawi",
            "fav drinks" => "hot choco",
            "date of birth" => "04-27-2024");
var_dump($muty);


//2. menampilkan tanggal lahir, serta umur

// Tanggal lahir Anda (format: Tahun-Bulan-Tanggal)
$tanggal_lahir = "2004-04-27";

// Menghitung umur
$umurMuty = floor((time() - strtotime($tanggal_lahir)) / 60 / 60 / 24 / 365);

// Menampilkan tanggal lahir dan umur
echo "Tanggal Lahir: " . date('d F Y', strtotime($tanggal_lahir)) . "<br>";
echo "Umur Anda: " . $umurMuty . " tahun";

// Menghitung umur hingga ke menit
$umur_detik = (time() - strtotime($tanggal_lahir));
$umur_menit = floor($umur_detik / 60);

echo " atau sekitar " . $umur_menit . " menit.";

?>
