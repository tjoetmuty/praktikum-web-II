<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <h1>Praktikum Form Handling</h1>
    <form action="proses.php">
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
</html>