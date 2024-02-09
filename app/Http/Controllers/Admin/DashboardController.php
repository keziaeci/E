<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()  {
        return view('pages.admin.index', [
            'buku' => Buku::all()->count(),
            'user' => User::all()->where('role','Pengguna')->count(),
        ]);
    }
}
