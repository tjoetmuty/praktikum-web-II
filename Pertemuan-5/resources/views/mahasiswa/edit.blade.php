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
            <div class="text-white font-semibold text-lg">
                <a href="index.php">Data Mahasiswa</a>
            </div>
            <div>
                <a href="{{route('mahasiswa.index')}}" class="text-whote hover:text-gray-200 px-4">Kembali</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto p-8">
        <form method="POST" action="{{route('mahasiswa.update', $mahasiswa->id)}}">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <h2 class="text-2xl font-bold mb-2">Edit Data Mahasiswa</h2>
                <p class="text-gray-500">mohon isi data di bawah ini dengan benar.</p>
            </div>

            <div class="mb-4">
                <label for="nim" class="block text-gray-700 text-sm font-bold mb-2">NIM:</label>
                <input type="text" id="nim" name="nim" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('nim') is-invalid @enderror"
                value="{{old('nim', $mahasiswa->nim)}}">
            </div>

            
            @error('nim')
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                <p class="font-bold">{{$message}}</p>
            </div>
            @enderror
            
            
            <div class="mb-4">
                <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
                <input type="text" id="nama" name="nama" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('nim') is-invalid @enderror"
                value="{{old('nim', $mahasiswa->nama)}}">
            </div>

            
            @error('nama')
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                <p class="font-bold">{{$message}}</p>
            </div>
            @enderror
            


            <div class="mb-4">
                <label for="tempatLahir" class="block text-gray-700 text-sm font-bold mb-2">Tempat Lahir:</label>
                <input type="text" id="tempatLahir" name="tempatLahir" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('tempatLahir') is-invalid @enderror"
                value="{{old('nim', $mahasiswa->tempat_lahir)}}">
            </div>

        
            @error('tempatLahir')
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                <p class="font-bold">{{$message}}</p>
            </div>
            @enderror
            


            <div class="mb-4">
                <label for="tanggalLahir" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Lahir:</label>
                <input type="text" id="tanggalLahir" name="tanggalLahir" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('tempatLahir') is-invalid @enderror"
                value="{{old('nim', $mahasiswa->tanggal_lahir)}}">
            </div>

            
            @error('tanggalLahir')
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                <p class="font-bold">{{$message}}</p>
            </div>
            @enderror
            

            <div>
                <label for="jenisKelamin" class="block text-gray-700 text-sm font-bold mb-2">Jenis Kelamin:</label>
                @if($mahasiswa->jenis_kelamin == "Laki-Laki")
                <div class="flex items-center mb-4">
                    <input type="radio" id="jk" name="jk" value="Laki-Laki" class="form-radio h-5 w-5 text-blue-600 @error('jk') is-invalid @enderror" checked>
                    <label for="male" class="ml-2">Laki-Laki</label>
                </div>
                <div class="flex items-center mb-4">
                    <input type="radio" id="jk" name="jk" value="perempuan" class="form-radio h-5 w-5 text-blue-600 @error('jk') is-invalid @enderror" >
                    <label for="female" class="ml-2">Perempuan</label>
                </div>
                @else
                <div class="flex items-center mb-4">
                    <input type="radio" id="jk" name="jk" value="Laki-Laki" class="form-radio h-5 w-5 text-blue-600 @error('jk') is-invalid @enderror">
                    <label for="male" class="ml-2">Laki-Laki</label>
                </div>
                <div class="flex items-center mb-4">
                    <input type="radio" id="jk" name="jk" value="perempuan" class="form-radio h-5 w-5 text-blue-600 @error('jk') is-invalid @enderror" checked>
                    <label for="female" class="ml-2">Perempuan</label>
                </div>
                @endif
            </div>

            
            @error('jk')
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                <p class="font-bold">{{$message}}</p>
            </div>
            @enderror

            <div class="mb-4">
                <label for="prodi" class="block text-gray-700 text-sm font-bold mb-2">Prodi:</label>
                <input type="text" id="prodi" name="prodi" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('prodi') is-invalid @enderror"
                value="{{old('nim', $mahasiswa->prodi)}}">
            </div>

           
            @error('prodi')
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                <p class="font-bold">{{$message}}</p>
            </div>
            @enderror
        

            <div class="mb-4">
                <label for="jurusan" class="block text-gray-700 text-sm font-bold mb-2">Jurusan:</label>
                <input type="text" id="jurusan" name="jurusan" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('jurusan') is-invalid @enderror"
                value="{{old('nim', $mahasiswa->jurusan)}}">
            </div>

            <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
            </div>
        </form>
    </div>
</body>
</html>