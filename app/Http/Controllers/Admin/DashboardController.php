<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()  {
        return view('pages.admin.index');
    }
    function create()  {
        return view('pages.admin.create');
    }
}
