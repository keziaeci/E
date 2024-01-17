<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function index()  {
        return view('pages.home.index', [
            'bukus' => Buku::all(),
            'famous' => Buku::withCount('peminjamans')->orderBy('peminjamans_count' , 'DESC')->get()
        ]); 
    }

    function show(Buku $buku)  {
        $status = Peminjaman::where('buku_id', $buku->id)->where('user_id', Auth::user()->id)->latest()->first('status');
        return view('pages.home.detail', [
            'buku' => $buku,
            'status' => $status
        ]);
    }       
}
