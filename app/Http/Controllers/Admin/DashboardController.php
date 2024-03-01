<?php

namespace App\Http\Controllers\Admin;

use App\Models\Buku;
use App\Models\User;
use App\Models\Penerbit;
use App\Models\Pengarang;
use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Peminjaman;
use App\Models\Pengembalian;

class DashboardController extends Controller
{
    function index()  {
        return view('pages.admin.index', [
            'buku' => Buku::all()->count(),
            'user' => User::all()->where('role','Pengguna')->count(),
            'pengarang' => Pengarang::all()->count(),
            'penerbit' => Penerbit::all()->count(),
            'peminjaman' => Peminjaman::all()->count(),
            'pengembalian' => Pengembalian::all()->count(),
            'kategori' => Kategori::all()->count(),
        ]);
    }
}
