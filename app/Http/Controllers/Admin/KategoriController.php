<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kategori;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKategoriRequest;
use App\Http\Requests\UpdateKategoriRequest;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.kategori.index',[
            'kategoris' => Kategori::latest()->get(),
            'trashes' => Kategori::onlyTrashed()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKategoriRequest $request)
    {
        $request->validated();
        Kategori::create([
            'nama' => $request->nama
        ]);

        return redirect()->route('master-kategori')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        return view('pages.admin.kategori.edit',compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKategoriRequest $request, Kategori $kategori)
    {
        $request->validated();
        $kategori->update([
            'nama' => $request->nama
        ]);

        return redirect()->route('master-kategori')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return redirect()->route('master-kategori')->with('success', 'Data berhasil dihapus');
    }

    /**
     * Restore the specified soft-deleted data
     */
    function restore(Kategori $kategori)  {
        $kategori->restore();
        return redirect()->back()->with('success', 'Data berhasil dikembalikan!');
    }
    /**
     * Delete permanently specified soft-deleted data
     */
    function forceDelete(Kategori $kategori)  {
        $kategori->forceDelete();
        return redirect()->back()->with('success', 'Data berhasil dihapus permanen!');
    }
}
