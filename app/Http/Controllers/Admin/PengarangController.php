<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pengarang;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePengarangRequest;
use App\Http\Requests\UpdatePengarangRequest;

class PengarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.pengarang.index',[
            'pengarangs' => Pengarang::latest()->get(),
            'trashes' => Pengarang::onlyTrashed()->get()
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.pengarang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePengarangRequest $request)
    {
        $request->validated();
        Pengarang::create([
            'nama' => $request->nama
        ]);

        return redirect()->route('master-pengarang')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengarang $pengarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengarang $pengarang)
    {
        return view('pages.admin.pengarang.edit',compact('pengarang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePengarangRequest $request, Pengarang $pengarang)
    {
        $request->validated();
        $pengarang->update([
            'nama' => $request->nama
        ]);

        return redirect()->route('master-pengarang')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengarang $pengarang)
    {
        $pengarang->delete();
        return redirect()->route('master-pengarang')->with('success', 'Data berhasil dihapus');
    }

    function restore(Pengarang $pengarang)  {
        $pengarang->restore();
        return redirect()->back()->with('success', 'Data berhasil dikembalikan!');
    }

    function forceDelete(Pengarang $pengarang)  {
        $pengarang->forceDelete();
        return redirect()->back()->with('success', 'Data berhasil dihapus permanen!');
    }
}
