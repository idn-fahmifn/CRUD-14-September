<?php

namespace App\Http\Controllers;

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

        return $request;

    }
}
