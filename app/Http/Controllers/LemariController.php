<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LemariController extends Controller
{
    function store(Buku $buku) {
        // dd($request);
        // $data = 
        $data = Peminjaman::create([
            'status' => Peminjaman::STATUS['Pending'],
            'buku_id' => $buku->id,
            'user_id' => Auth::user()->id
        ]);

        return $data;
    }
}
