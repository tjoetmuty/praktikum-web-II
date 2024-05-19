<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * @return RedirectResponse
     */
    
   public function store(Request $request): RedirectResponse
   {
       // validate form
       $request->validate([
           'name'           => 'required',
           'email'          => 'required',
           'password'       => 'required',
       ]);


       User::create([
           'name'           => $request->name,
           'email'          => $request->email,
           'password'       => $request->password,
           ]);

       //redirect to index
       return redirect()->route('mahasiswa.index')->with(['success' => 'Data berhasil Disimpan!']);
   }
}
