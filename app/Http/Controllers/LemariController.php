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
            'tanggal_pinjam' => Carbon::now(),
            'tenggat_waktu' => Carbon::now()->addWeek(),
            'status' => Peminjaman::STATUS['Pending'],
            'buku_id' => $buku->id,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->back();
    }

    function update(Buku $buku , Peminjaman $peminjaman) {

        $pengembalian = Pengembalian::create([
            'tanggal_kembali' => Carbon::now(),
            'peminjaman_id' => $peminjaman->id,
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
}