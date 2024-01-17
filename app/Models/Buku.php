<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
}
