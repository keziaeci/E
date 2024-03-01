<?php

namespace App\Http\Controllers\Admin;

use App\Models\Penerbit;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;
use App\Http\Requests\StorePenerbitRequest;
use App\Http\Requests\UpdatePenerbitRequest;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.penerbit.index',[
            'penerbits' => Penerbit::latest()->get(),
            'trashes' => Penerbit::onlyTrashed()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.penerbit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePenerbitRequest $request)
    {
        $request->validated();
        Penerbit::create([
            'nama' => $request->nama
        ]);

        return redirect()->route('master-penerbit')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penerbit $penerbit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penerbit $penerbit)
    {
        return view('pages.admin.penerbit.edit',compact('penerbit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenerbitRequest $request, Penerbit $penerbit)
    {
        $request->validated();
        $penerbit->update([
            'nama' => $request->nama
        ]);

        return redirect()->route('master-penerbit')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penerbit $penerbit)
    {
        $penerbit->delete();
        return redirect()->route('master-penerbit')->with('success', 'Data berhasil dihapus');
    }
    /**
     * Restore the specified soft-deleted data
     */
    function restore(Penerbit $penerbit)  {
        $penerbit->restore();
        return redirect()->back()->with('success', 'Data berhasil dikembalikan!');
    }
    /**
     * Delete permanently specified soft-deleted data
     */
    function forceDelete(Penerbit $penerbit)  {
        activity()->disableLogging();
        Activity::where('subject_id', $penerbit->id)->delete();
        $penerbit->forceDelete();
        return redirect()->back()->with('success', 'Data berhasil dihapus permanen!');
    }
}
