<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Registration Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="ml-8 mt-8">

        <div class="bg-blue-500 w-[500px] h-[300px] flex flex-col items-center justify-center rounded">
            <div class="">
                <h2 class="font-bold ">Registration Form</h2>
                <p>Please fill out this form with the required information</p>
            </div>
            <hr>
            <form action="" method="post">
                <div>
                    <div class="flex gap-2">
                        <div class="nama">
                            <label for="firstname"><b>Name</b></label>
                            <br>
                            <input type="text" id="firstname" name="name" placeholder="Enter your first name" class="" required>
                        </div>
                        <div class="email">
                            <label for="email"><b>Email</b></label>
                            <br>
                            <input type="email" id="email" name="email" placeholder="Enter your email"  required>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <div class="password">
                            <label for="password"><b>Password</b></label>
                            <br>
                            <input type="password" id="lastname" name="pass" placeholder="Enter your password" required>
                        </div>
                        <div class="password">
                            <label for="confirmpass"><b>Confirm Password</b></label>
                            <br>
                            <input type="password" id="confirmpass" name="confirmpass" placeholder="Confirm your password"  required>
                        </div>
                    </div>
                </div>
               
                    <div >
                        <label for="address"><b>Address</b></label>
                        <br>
                        <input type="text" id="address" name="alamat" placeholder="Enter your address" class="w-[370px]" required>
                    </div>
                    
                <div class="flex justify-center mt-6 w-[370px]">
                    <div class="button">
                        <button class="w-20 bg-gray-200" name="register">Register</button>
                    </div>
            
                </div>
            </form>
            <a href="login.php" ><button class="w-20 bg-gray-200 mt-2" name="login">Login</button></a>
        </div>
    </div>
</body>
<?php
if(isset($_POST["register"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $confirmpass = $_POST["confirmpass"];
        $alamat = $_POST["alamat"];
       
    
        echo "Nama :  $name <br>";
        echo "Email : $email <br>";
        echo "Password yang diinput $pass <br>";
        echo "Konfirmasi Password yang diinput $confirmpass <br>";
        echo "Alamat : $alamat";
    } else {
        echo "Request Denied";
    }
}

