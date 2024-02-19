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
            'bukus' => Buku::latest()->get()
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
        // dd($request->file('cover'));
        $request->validated();

        $buku =  Buku::create([
            'judul' => $request->judul,
            'tahun_terbit' => $request->tahun_terbit,
            'penerbit_id' => $request->penerbit,
            'pengarang_id' => $request->pengarang,
            'stok' => $request->stok,
            // 'cover' => $cover,
            'deskripsi' => $request->deskripsi,
        ]);
        // Image::create();
        foreach ($request->file('cover') as $filecover) {
            $cover = $filecover->storePublicly('files/cover','public');
            $buku->images()->create([
                'filename' => $cover,
                'imageable_id' => $buku->id,
                'imageable_type' => '\App\Models\Buku'
            ]);
        }

        $buku->kategoris()->attach($request->kategori);
        
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

        foreach ($request->file('cover') as $filecover) {
            $cover = $filecover->storePublicly('files/cover','public');
            $buku->images()->create([
                'filename' => $cover,
                'imageable_id' => $buku->id,
                'imageable_type' => '\App\Models\Buku'
            ]);
        }
        return redirect()->route('master-buku')->with('success', 'Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {   
        // // dd($buku->images);
        foreach ($buku->images as $cover) {
            Storage::disk('public')->delete($cover->filename);
            $cover->delete();
        } 
        // $buku->images()->delete();
        $buku->delete();
        return redirect()->route('master-buku')->with('success', 'Data berhasil dihapus');
    }

    function coverDelete(Buku $buku , Image $image)  {
        Storage::disk('public')->delete($image->filename);
        $image->delete();
        return redirect()->back();
    }
}
