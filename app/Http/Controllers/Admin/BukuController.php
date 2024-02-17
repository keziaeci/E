<?php

namespace App\Http\Controllers\Admin;

use App\Models\Buku;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use App\Models\Kategori;
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
            'kategoris' => Kategori::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBukuRequest $request)
    {
        // dd($request);
        $request->validated();

        $cover = $request->file('cover')->storePublicly('files/cover','public');

        $buku =  Buku::create([
            'judul' => $request->judul,
            'tahun_terbit' => $request->tahun_terbit,
            'penerbit_id' => $request->penerbit,
            'pengarang_id' => $request->pengarang,
            'stok' => $request->stok,
            'cover' => $cover,
            'deskripsi' => $request->deskripsi,
        ]);

        $buku->kategoris()->attach($request->kategori);
        
        return redirect()->route('master-buku')->with('success', 'Data berhasil ditambahkan');
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
        $request->validated();

        $buku->update([
            'judul' => $request->judul,
            'tahun_terbit' => $request->tahun_terbit,
            'pengarang_id' => $request->pengarang,
            'penerbit_id' => $request->penerbit,
            'stok' => $request->stok,
            'cover' => $request->cover,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('master-buku')->with('success', 'Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect()->route('master-buku')->with('success', 'Data berhasil dihapus');
    }
}
