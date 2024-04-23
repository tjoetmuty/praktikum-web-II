<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="ml-8 mt-2 gap-4">

<div class="bg-blue-500 w-[300px] h-[300px] flex flex-col items-center justify-center rounded">
    <div class="flex flex-col items-center">
        <h2 class="font-bold mb-8">Registration Form</h2>
</div>
    <form action="" method="post">
        <div>
            <div class="flex flex-col items-center justify-center gap-2">
                <div class="email">
                    <label for="email"><b>Email</b></label>
                    <br>
                    <input type="email" id="email" name="email" placeholder="Enter your email"  required>
                </div>
                <div class="password">
                    <label for="password"><b>Password</b></label>
                    <br>
                    <input type="password" id="lastname" name="pass" placeholder="Enter your password" required>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-6 w-[370px]">
            <div class="button">
                <button class="w-20 bg-gray-200" name="register">Register</button>
                <button class="w-20 bg-gray-200" name="login">Login</button>
            </div>
        </div>
    </form>
</div>
</div>
</body>
</html>