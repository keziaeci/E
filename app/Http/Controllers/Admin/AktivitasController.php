<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class AktivitasController extends Controller
{
    function index() {
        return view('pages.admin.aktivitas.index', [
            'aktivitases' => Activity::latest()->get()
        ]);
    }
}
