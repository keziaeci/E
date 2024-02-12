<?php

namespace App\Http\Controllers\Admin;

use App\Models\Buku;
use App\Models\User;
use App\Models\Penerbit;
use App\Models\Pengarang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    function index()  {
        return view('pages.admin.index', [
            'buku' => Buku::all()->count(),
            'user' => User::all()->where('role','Pengguna')->count(),
            'pengarang' => Pengarang::all()->count(),
            'penerbit' => Penerbit::all()->count(),
        ]);
    }
}
