<?php
include_once('koneksi.php');

if(isset($_POST['tambah'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tempatLahir = $_POST['tempatLahir'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $jenisKelamin = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $jurusan = $_POST['jurusan'];

    mysqli_query($conn, "INSERT INTO mahasiswa VALUES(null, '$nim', '$nama', '$tempatLahir', '$tanggalLahir',
    '$jenisKelamin', '$prodi', '$jurusan')");

    header("Location: index.php");
}

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
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-white font-semibold text-lg"><a href="index.php">Data Mahasiswa</a></div>
            <div>
                <a href="index.php" class="text-white hover:text-gray-200 px-4">Kembali</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto p-8">
        <form method="POST">
            <div class="mb-4">
                <h2 class="text-2xl font-bold mb-2">Tambah Data Mahasiswa</h2>
                <p class="text-gray-500">Mohon isi data di bawah ini dengan benar.</p>
            </div>
            <div class="mb-4">
                <label for="nim" class="block text-gray-700 text-sm font-bold mb-2">NIM:</label>
                <input type="text" id="nim" name="nim" class="border border-gray-300 rounded-md py-2 px-3 w-full">
            </div>
            <div class="mb-4">
                <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
                <input type="text" id="nama" name="nama" class="border border-gray-300 rounded-md py-2 px-3 w-full">
            </div>
            <div class="mb-4">
                <label for="tempatLahir" class="block text-gray-700 text-sm font-bold mb-2">Tempat Lahir:</label>
                <input type="text" id="tempatLahir" name="tempatLahir" class="border border-gray-300 rounded-md py-2 px-3 w-full">
            </div>
            <div class="mb-4">
                <label for="tanggalLahir" class="block text-gray-700 text-sm font-bold mb-2">Tempat Lahir:</label>
                <input type="date" id="tanggalLahir" name="tanggalLahir" class="border border-gray-300 rounded-md py-2 px-3 w-full">
            </div>

            <div class="mb-4">
                <label for="jenisKelamin" class="block text-gray-700 text-sm font-bold mb-2">Jenis Kelamin:</label>

                <div class="flex items-center mb-4">
                    <input type="radio" id="jk" name="jk" value="Laki-Laki" class="form-radio h-5 w-5 text-blue-600">
                    <label for="male" class="ml-2">Laki-Laki</label>
                </div>
                <div class="flex items-center mb-4">
                    <input type="radio" id="jk" name="jk" value="perempuan" class="form-radio h-5 w-5 text-blue-600">
                    <label for="female" class="ml-2">Perempuan</label>
                </div>
            </div>

            <div class="mb-4">
                <label for="prodi" class="block text-gray-700 text-sm font-bold mb-2">Prodi:</label>
                <input type="text" id="prodi" name="prodi" class="border border-gray-300 rounded-md py-2 px-3 w-full">
            </div>

            <div class="mb-4">
                <label for="jurusan" class="block text-gray-700 text-sm font-bold mb-2">Jurusan:</label>
                <input type="text" id="jurusan" name="jurusan" class="border border-gray-300 rounded-md py-2 px-3 w-full">
            </div>

            <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                name="tambah">Tambah</button>
            </div>
        </form>
    </div>
</body>
</html>