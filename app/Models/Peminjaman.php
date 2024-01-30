<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Peminjaman extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'peminjamans';

    public const STATUS = [
        'Pending' => 'Menunggu', 
        'Borrow' => 'Sedang Meminjam',
        'Returned' => 'Sudah Dikembalikan',
        'Past Due' => 'Dikembalikan Terlambat'
    ];

    function scopeStatus($query,$status) {
        return $query->where('status' , 'like' , "%{$status}%");
    }

    function buku() : BelongsTo {
        return $this->belongsTo(Buku::class);
    }
    function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
