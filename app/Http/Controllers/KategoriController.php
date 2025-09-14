<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        return view('kategori.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => ['string', 'required','min:3', 'max:20'],
            'deskripsi' => ['required'],
        ]);

        Kategori::create([
            'nama_kategori' => $request->nama_kategori,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect()->route('kategori.index')->with('success', "Kategori berhasil ditambahkan");
        

    }
}
