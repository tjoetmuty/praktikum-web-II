<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Data Mahasiswa</title>
</head>
<body>
    <nav class="bg-blue-500">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-white font-semibold text-lg"><a href="index.php">Data Mahasiswa</a></div>
            <div>
                <a href="{{route('mahasiswa.create')}}" class="text-white hover:text-gray-200 px-4">Tambah Data</a>
            </div>
        </div>
    </nav>
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-5">Data Mahasiswa</h1>
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
                @forelse ($mahasiswa as $siswa)
                <tr>
                    <td class="border px-4 py-2">{{$loop -> iteration}}</td>
                    <td class="border px-4 py-2">{{$siswa -> nim}}</td>
                    <td class="border px-4 py-2">{{$siswa -> nama}}</td>
                    <td class="border px-4 py-2">{{$siswa -> prodi}}</td>
                    <td class="border px-4 py-2">{{$siswa -> jurusan}}</td>
                    <td class="border px-4 py-2 flex justify-around">
                        <form method="POST" onsubmit="return confirm('Apakah anda yakin?');" action="{{route('mahasiswa.destroy', $siswa->id)}}">
                        <a href="{{route('mahasiswa.show', $siswa -> id)}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded inline-block mb-1">SHOW</a>
                        <a href="{{route('mahasiswa.edit', $siswa -> id)}}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded inline-block mb-1">EDIT</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded inline-block mb-1">HAPUS</button>
                        </form>
                    </td>
                </tr>
                @empty
                <h3 class="text-3xl font-bold mb-5">Data Mahasiswa Tidak Ada</h3>
                @endforelse
            </tbody>
        </table>
        {{$mahasiswa->links()}}
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