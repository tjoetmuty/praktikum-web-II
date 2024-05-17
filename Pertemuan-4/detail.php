<?php

include_once('koneksi.php');
$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id = '$id'");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Data Mahasiswa</title>
</head>
<body>
    <nav class="bg-blue-500 p-4">
        <div class="container mx-auto flex justify-between item-center">
            <div>
                <a href="index.php">Data Mahasiswa</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto">
        <div class="max-w-lg mx-auto bg-white rounded-lg overflow-hidden shadow-lg">
            <div class="bg-blue-500 text-center py-4 my-4 rounded-t-lg">
                <h2 class="text-xl front-bold">Data Diri</h2>
            </div>
            <div class="p-6">
                <div class="mb-4">
                    <p class="text-gray-600 font-semibold">NIM : </p>
                    <p class="text-lg"><?= $data['nim']?> 
                </div>
                <div class="mb-4">
                    <p class="text-gray-600 font-semibold">Nama : </p>
                    <p class="text-lg"><?= $data['nama']?> 
                </div>
                <div class="mb-4">
                    <p class="text-gray-600 font-semibold">Kategori Barang : </p>
                    <p class="text-lg"><?= $data['kategori']?> 
                </div>
                <div class="mb-4">
                    <p class="text-gray-600 font-semibold">Tanggal Lahir : </p>
                    <p class="text-lg"><?= $data['tanggal_lahir']?> 
                </div>
                <div class="mb-4">
                    <p class="text-gray-600 font-semibold">Jenis Kelamin : </p>
                    <p class="text-lg"><?= $data['jenis_kelamin']?> 
                </div>
                <div class="mb-4">
                    <p class="text-gray-600 font-semibold">Prodi : </p>
                    <p class="text-lg"><?= $data['prodi']?> 
                </div>
                <div class="mb-4">
                    <p class="text-gray-600 font-semibold">Jurusan : </p>
                    <p class="text-lg"><?= $data['jurusan']?> 
                </div>
                <div class="mb-4">
                    <a href="index.php" 
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded inline-block mb-1">Kembali</a>
                    <a href="edit.php?id=<?= $data['id']?>" 
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded inline-block mb-1">Edit</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
