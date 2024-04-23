
//buat form handling menggunakan inputan checkbox
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="hasil.php" method="POST">
        <label for="name">Hobi</label><br>
        <input type="checkbox" name="hobi[]" value="Menari">Menari<br>
        <input type="checkbox" name="hobi[]" value="Berenang">Berenang<br>
        <input type="checkbox" name="hobi[]" value="Lari">Lari<br>
        <input type="checkbox" name="hobi[]" value="Jalan">Jalan<br><br>

        <input type="submit" name="submit"><br>
    </form>
</body>
</html>