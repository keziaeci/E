<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Buku extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    function penerbit() : BelongsTo {
        return $this->belongsTo(Penerbit::class);
    }
    function pengarang() : BelongsTo {
        return $this->belongsTo(Pengarang::class);
    }

    function komentars() : HasMany {
        return $this->hasMany(Komentar::class);
    }

    function peminjamans() : HasMany {
        return $this->hasMany(Peminjaman::class);
    }

    function kategoris() : BelongsToMany {
        return $this->belongsToMany(Kategori::class, 'kategori_buku', 'buku_id', 'kategori_id');
    }
}
