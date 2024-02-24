<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pengembalian;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePengembalianRequest;
use App\Http\Requests\UpdatePengembalianRequest;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.pengembalian.index', [
            'pengembalians' => Pengembalian::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePengembalianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengembalian $pengembalian)
    {
        return view('pages.admin.pengembalian.detail',compact('pengembalian'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengembalian $pengembalian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePengembalianRequest $request, Pengembalian $pengembalian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengembalian $pengembalian)
    {
        //
    }
}
