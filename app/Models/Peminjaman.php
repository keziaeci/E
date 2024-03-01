<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Peminjaman extends Model
{
    use HasFactory , SoftDeletes , LogsActivity;

    protected $guarded = ['id'];

    protected $with = ['buku'];

    protected $table = 'peminjamans';

    public const STATUS = [
        'Pending' => 'Menunggu', 
        'Borrow' => 'Sedang Meminjam',
        'Returned' => 'Sudah Dikembalikan',
        'Past Due' => 'Dikembalikan Terlambat'
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['*']);
    }
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
