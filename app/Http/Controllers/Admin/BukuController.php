<?php

namespace App\Http\Controllers\Admin;

use App\Models\Buku;
use App\Models\Image;
use App\Models\Kategori;
use App\Models\Penerbit;
use App\Models\Pengarang;
use PhpParser\Node\Stmt\Return_;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBukuRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateBukuRequest;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.buku.index', [
            'bukus' => Buku::latest()->get(),
            'trashes' => Buku::withTrashed()->onlyTrashed()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.buku.create',[
            'pengarangs' => Pengarang::all(),
            'penerbits' => Penerbit::all(),
            'kategoris' => Kategori::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBukuRequest $request)
    {
        // dd($request);
        $request->validated();

        $buku =  Buku::create([
            'judul' => $request->judul,
            'tahun_terbit' => $request->tahun_terbit,
            'penerbit_id' => $request->penerbit,
            'pengarang_id' => $request->pengarang,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
        ]);

        foreach ($request->file('cover') as $filecover) {
            $cover = $filecover->storePublicly('files/cover','public');
            $buku->images()->create([
                'filename' => $cover,
                'imageable_id' => $buku->id,
                'imageable_type' => '\App\Models\Buku'
            ]);
        }

        $buku->kategoris()->attach($request->kategoris_id);
        
        return redirect()->route('master-buku')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        return view('pages.admin.buku.detail',[
            'buku' => $buku,
            'images' => Image::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        return view('pages.admin.buku.edit', [
            'buku' => $buku,
            'pengarangs' => Pengarang::all(),
            'penerbits' => Penerbit::all(),
            'kategoris' => Kategori::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBukuRequest $request, Buku $buku)
    {   
        $request->validated();

        $buku->update([
            'judul' => $request->judul,
            'tahun_terbit' => $request->tahun_terbit,
            'pengarang_id' => $request->pengarang,
            'penerbit_id' => $request->penerbit,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
        ]);

        $buku->kategoris()->sync($request->kategoris_id);
        
        if (!empty($request->file('cover'))) {
            foreach ($request->file('cover') as $filecover) {
                $cover = $filecover->storePublicly('files/cover','public');
                $buku->images()->create([
                    'filename' => $cover,
                    'imageable_id' => $buku->id,
                    'imageable_type' => '\App\Models\Buku'
                ]);
            }
        }

        return redirect()->route('master-buku')->with('success', 'Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {   
        foreach ($buku->images as $cover) {
            Storage::disk('public')->delete($cover->filename);
            $cover->delete();
        } 

        $buku->delete();
        return redirect()->route('master-buku')->with('success', 'Data berhasil dihapus!');
    }

    function coverDelete(Buku $buku , Image $image)  {
        Storage::disk('public')->delete($image->filename);
        $image->delete();
        return redirect()->back()->with('success', 'Cover berhasil dihapus');
    }

    function restore(Buku $buku)  {
        $buku->restore();
        return redirect()->back()->with('success', 'Data berhasil dikembalikan!');
    }

    function forceDelete(Buku $buku)  {
        $buku->forceDelete();
        return redirect()->back()->with('success', 'Data berhasil dihapus permanen!');
    }
}
