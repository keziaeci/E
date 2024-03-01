<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function index()  {
        return view('pages.home.index', [
            'bukus' => Buku::withoutTrashed()->get(),
            'famous' => Buku::withCount('peminjamans')->orderBy('peminjamans_count' , 'DESC')->get()
        ]); 
    }

    function show(Buku $buku)  {
        $status = Peminjaman::where('buku_id', $buku->id)->where('user_id', Auth::user()->id)->latest()->first('status');
        $peminjaman = Peminjaman::where('buku_id', $buku->id)->where('user_id', Auth::user()->id)->latest()->first();
        
        return view('pages.home.detail', [
            'buku' => $buku,
            'status' => $status,
            'peminjaman' => $peminjaman
        ]);
    }
    
    function search() {
        $data = Buku::latest()->filter(request('search'))->get();
        return view('pages.search.index', [
            'data' => $data,
            'bukus' => Buku::inRandomOrder()->get()
        ]);
    }

    function category(Kategori $kategori) {
        return view('pages.category.index', [
            'kategoris' =>  $kategori
        ]);
    }
}
