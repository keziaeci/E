<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class LemariController extends Controller
{
    function store(Buku $buku) {
        // dd($request);
        // $data = 
        $data = Peminjaman::create([

        ]);
    }
}
