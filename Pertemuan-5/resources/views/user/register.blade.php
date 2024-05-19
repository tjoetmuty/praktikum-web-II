<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center mt-28">
    <div class="w-[400px] h-full border-2 border-solid border-white shadow-md rounded-lg  flex flex-col justify-center">
        <h1 class="font-bold m-2 text-[30px]">Register</h1>
        <form  method="post" class="flex flex-col gap-4 m-2" action="register.php">
            <div class="flex flex-col gap-2">
                <div class="flex flex-col ">
                    <label for="">Email</label>
                    <input type="text" class="border-2 border-solid border-gray-200 rounded-md" name="email">
                </div>
                <div class="flex flex-col ">
                    <label for="">Username</label>
                    <input type="text" class="border-2 border-solid border-gray-200 rounded-md" name="name">
                </div>
                <div class="flex flex-col">
                    <label for="">Password</label>
                    <input type="password" class="border-2 border-solid border-gray-200 rounded-md" name="password">
                </div>
            </div>
            <div class="flex flex-col">
                <button type="submit" class="border-2 border-solid border-black rounded-md 
                bg-black text-white hover:bg-gray-600 py-2 mt-2" name="submit">Register</button>
            </div>
        </form>
    </div>
</body>
</html>