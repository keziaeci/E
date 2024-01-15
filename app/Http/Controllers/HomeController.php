<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()  {
        return view('pages.home.index', [
            'bukus' => Buku::all()
        ]); 
    }

    function show(Buku $buku)  {
        return view('pages.home.detail', [
            'buku' => $buku
        ]);
    }   
}
