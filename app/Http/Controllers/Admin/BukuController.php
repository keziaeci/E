<?php

namespace App\Http\Controllers\Admin;

use App\Models\Buku;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use App\Models\Penerbit;
use App\Models\Pengarang;
use PhpParser\Node\Stmt\Return_;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.buku.index', [
            'bukus' => Buku::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.buku.create',[
            'pengarangs' => Pengarang::all(),
            'penerbits' => Penerbit::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBukuRequest $request)
    {
        // dd($request);
        $credentials = $request->validated();

        $data =  Buku::create([
            'judul' => $credentials['judul'],
            'tahun_terbit' => $credentials['tahun_terbit'],
            'penerbit_id' => $credentials['penerbit'],
            'pengarang_id' => $credentials['pengarang'],
            'stok' => $credentials['stok'],
            'cover' => $credentials['cover'],
            'deskripsi' => $credentials['deskripsi'],
        ]);
        
        return redirect()->route('master-buku')->with('success', 'Data sukses ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        return view('pages.admin.buku.detail', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        return view('pages.admin.buku.edit', [
            'buku' => $buku,
            'pengarangs' => Pengarang::all(),
            'penerbits' => Penerbit::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBukuRequest $request, Buku $buku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect()->route('master-buku');
    }
}
