<?php
include_once('koneksi.php');
$error = false;
if (isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = mysqli_query($conn, "SELECT * FROM users");
    // $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $data =  mysqli_fetch_array($query);
    if($data['email'] == $email && $data['password'] == $password){
        header("Location: index.php");
        exit();
    }else{
        $error = true;
    }
}

if (isset($_POST['submit']) && $error = true){
    $alert = "Akun mu belum terdaftar";
    echo "<script>alert('$alert'); window.location.href = 'login.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Praktikum 4 Web II</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center mt-28">
    <div class="w-[400px] border-2 border-solid border-white shadow-md rounded-lg  flex flex-col justify-center py-8">
        <h1 class="font-bold m-2 text-[30px]">hi hey hello</h1>
        <form  method="post" class="flex flex-col gap-4 m-2">
            <div class="flex flex-col gap-2">
                <div class="flex flex-col ">
                    <label for="">Email</label>
                    <input type="text" class="border-2 border-solid border-gray-200 rounded-md" name="email">
                </div>
                <div class="flex flex-col">
                    <label for="">Password</label>
                    <input type="password" class="border-2 border-solid border-gray-200 rounded-md" name="password">
                </div>
            </div>
            <div class="flex flex-col">
                <button type="submit" class="border-2 border-solid border-black 
                rounded-md bg-black text-white hover:bg-gray-600 py-2 mt-2" name="submit">Login</button>
                <p class="text-sm text-gray-500">Don't have an account? <a href="register.php" class="hover:text-black">Sign up</a></p>
            </div>
        </form>
    </div>
</body>
</html>