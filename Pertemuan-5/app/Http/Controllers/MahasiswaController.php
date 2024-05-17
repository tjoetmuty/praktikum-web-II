<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;

//import model product
use App\Models\Mahasiswa;

//import return type view
use Illuminate\View\View;
class MahasiswaController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
    public function index() : View 
    {
        $mahasiswa = Mahasiswa::latest()->paginate(10);

        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * create
     * 
     * @return View
     */
    public function create() : View
    {
        return view('mahasiswa.create');
    }
    /**
     * store
     * 
     * @param mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // validate form
        $request->validate([
            'nim'           => 'required|max:10',
            'nama'          => 'required',
            'tempatLahir'   => 'required',
            'tanggalLahir'  => 'required|date',
            'jk'            => 'required|in:Laki-Laki,perempuan',
            'prodi'         => 'required',
            'jurusan'       => 'required',
        ]);


        Mahasiswa::create([
            'nim'           => $request->nim,
            'nama'          => $request->nama,
            'tempat_lahir'  => $request->tempatLahir,
            'tanggal_lahir' => $request->tanggalLahir,
            'jenis_kelamin' => $request->jk,
            'prodi'         => $request->prodi,
            'jurusan'       => $request->jurusan,
            ]);

        //redirect to index
        return redirect()->route('mahasiswa.index')->with(['success' => 'Data berhasil Disimpan!']);
    }

    /**
     * show
     * 
     * @param mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('mahasiswa.show', compact('mahasiswa'));
    }

     /**
     * edit
     * 
     * @param mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('mahasiswa.edit', compact('mahasiswa'));
    }

     /**
     * update
     * 
     * @param mixed $request
     * @param mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
       //validate form
       $request->validate([
        'nim' => 'required|max:10',
        'nama' => 'required',
        'tempatLahir' => 'required',
        'tanggalLahir' => 'required|date',
        'jk' => 'required|in:Laki-Laki,perempuan',
        'prodi' => 'required',
        'jurusan' => 'required',
       ]);

       $mahasiswa = Mahasiswa::findOrFail($id);

       $mahasiswa->update([
        'nim' => $request->nim,
        'nama' => $request->nama,
        'tempatLahir' => $request->tempatLahir,
        'tanggalLahir' => $request->tanggalLahir,
        'jk' => $request->jk,
        'prodi' => $request->prodi,
        'jurusan' => $request->jurusan,
       ]);

       //redirect to index
       return redirect()->route('mahasiswa.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     * 
     * @param mixed $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        //redirect to index
        return redirect()->route('mahasiswa.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
