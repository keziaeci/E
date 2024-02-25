<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Peminjaman extends Model
{
    use HasFactory , SoftDeletes;

    protected $guarded = ['id'];

    protected $with = ['buku'];

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

    function pengembalian() : HasOne {
        return $this->hasOne(Pengembalian::class);
    }
}
