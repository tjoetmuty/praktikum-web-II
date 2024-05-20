<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>
<body class="flex justify-center mt-28">
    <div class="w-[400px] border-2 border-solid border-white shadow-md rounded-lg  flex flex-col justify-center py-8">
        <h1 class="font-bold m-2 text-[30px]">hi hey hello</h1>
        <form action="{{ route('user.login')}}" method="post" class="flex flex-col gap-4 m-2">
            @csrf
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
                rounded-md bg-black text-white hover:bg-gray-600 py-2 mt-2" name="submit" >Login</button>
                <p class="text-sm text-gray-500">Don't have an account? <a href="{{route('register')}}" class="hover:text-black">Sign up</a></p>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        //message with sweetalert
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif

    </script>
</body>
</html>