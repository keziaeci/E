<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LemariController extends Controller
{
    function store(Buku $buku) {

        Peminjaman::create([
            'tanggal_pinjam' => Carbon::now('Asia/Jakarta'),
            'tenggat_waktu' => Carbon::now('Asia/Jakarta')->addWeek(),
            'status' => $buku->checkStok(),
            'buku_id' => $buku->id,
            'user_id' => Auth::user()->id
        ]);
        $buku->update([
            'stok' => $buku->stockOut()
        ]);

        return redirect()->back();
    }

    function update(Buku $buku , Peminjaman $peminjaman) {

        $pengembalian = Pengembalian::create([
            'tanggal_kembali' => Carbon::now('Asia/Jakarta'),
            'peminjaman_id' => $peminjaman->id,
        ]);

        // Menambah stok buku 
        $buku->update([
            'stok' => $buku->stockIn()
        ]);

        if($pengembalian->tanggal_kembali->greaterThan($peminjaman->tenggat_waktu)) {
            $peminjaman->update([
                'status' => Peminjaman::STATUS['Past Due']
            ]);
        } else {
            $peminjaman->update([
                'status' => Peminjaman::STATUS['Returned']
            ]);
        }

        return redirect()->back();

    }

    function bacaLagi(Buku $buku, Peminjaman $peminjaman) {
        // dd($peminjaman);
        $peminjaman->update([
            'status' => Peminjaman::STATUS['Pending']
        ]);

        return redirect()->back();
    }
}
