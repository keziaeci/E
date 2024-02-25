<?php

namespace App\Http\Controllers\Admin;

use App\Models\Peminjaman;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePeminjamanRequest;
use App\Http\Requests\UpdatePeminjamanRequest;
use App\Models\Buku;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Peminjaman::withoutTrashed()->latest()->get());
        return view('pages.admin.peminjaman.index', [
            'peminjamans' => Peminjaman::whereHas('buku', function ($query) {
                $query->whereNull('deleted_at');
            })
            ->whereNot(function ($query) {
                $query->where('status', 'Menunggu');
            })
            ->latest()->get(),
            'permohonans' => Peminjaman::withTrashed()->where('status', 'Menunggu')->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePeminjamanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Peminjaman $peminjaman)
    {
        return view('pages.admin.peminjaman.detail',compact('peminjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePeminjamanRequest $request, Peminjaman $peminjaman , $buku )
    {   
        if ($peminjaman->buku->isNotAvailable()) {
            return redirect()->back()->with('error', 'Buku ini sedang tidak tersedia!');
        } else {
            $peminjaman->update([
                'status' => Peminjaman::STATUS['Borrow']
            ]);
            // $buku->update([
            //     'stok' => $buku->stockOut()
            // ]);
            $buku = Buku::where('id', $buku)->first();
            $buku->update([
                'stok' => $buku->stockOut() 
            ]);
        }
        
            return redirect()->back()->with('success', 'Berhasil memberi ijin!');
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjaman $peminjaman)
    {
        //
    }
}
