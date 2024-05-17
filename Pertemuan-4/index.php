<?php
include_once('koneksi.php');

$query = mysqli_query($conn, "SELECT * FROM mahasiswa");
$no = 1;

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["inputsearch"])) {
    $inputsearch = $_GET["inputsearch"];
    $query = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim LIKE '%$inputsearch%' OR nama LIKE '%$inputsearch%'");
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
    <nav class="bg-blue-500 py-4 px-8">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-white font-semibold text-lg"><a href="index.php">Data Mahasiswa</a></div>
            <div>
                <a href="tambah-data.php" class="text-white hover:text-gray-200 px-4">Tambah</a>
            </div>
        </div>
    </nav>
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-5">Data Mahasiswa</h1>
        <form method="get" class="my-4">
            <input type="search" class="border-2 border-solid border-gray-200 rounded-md" name="inputsearch">
            <button type="submit" class="bg-blue-500 text-white w-12 h-6 rounded-md text-sm" name="search">Cari</button>
        </form>
        <table class="table-auto border-collapse w-full">
            <thead>
                <tr>
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">NIM</th>
                    <th class="border px-4 py-2">Nama</th>
                    <th class="border px-4 py-2">Prodi</th>
                    <th class="border px-4 py-2">Jurusan</th>
                    <th class="border px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($data = mysqli_fetch_array($query)) :
                ?>
                <tr>
                    <td class="border px-4 py-2"><?= $no ?></td>
                    <td class="border px-4 py-2"><?= $data['nim'] ?></td>
                    <td class="border px-4 py-2"><?= $data['nama'] ?></td>
                    <td class="border px-4 py-2"><?= $data['prodi'] ?></td>
                    <td class="border px-4 py-2"><?= $data['jurusan'] ?></td>
                    <td class="border px-4 py-2">
                        <a href="detail.php?id=<?= $data['id']?>" 
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded inline-block mb-1">Detail</a>
                        <a href="edit.php?id=<?= $data['id']?>" 
                        class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded inline-block mb-1">Edit</a>
                        <a href="hapus.php?id=<?= $data['id']?>" 
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded inline-block mb-1" 
                        onclick="return confirm ('Yakin Ingin Menghapus Data Ini?')">Delete</a>
                    </td>
                </tr>
                <?php
                $no++;
                endwhile;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>