<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denda extends Model
{
    use HasFactory;

    protected $table = 'denda';

    protected $fillable = [
        'peminjaman_id',
        'jumlah_hari',
        'total_denda',
    ];

    public function peminjaman()
    {
        return $this->belongsTo(PeminjamanBuku::class, 'peminjaman_id');
    }
}
