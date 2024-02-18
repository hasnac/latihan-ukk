<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
    protected $table = 'bukus';
    protected $fillable = [
        'id_buku',
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'gambar',
        'deskripsi',
        'stok',
        'kategori',
        'status',
    ];
    public $timestamps = true;
    protected $primaryKey = 'id_buku';
    public function pinjam()
    {
        return $this->belongsTo(peminjaman::class, 'id_buku', 'id_buku');
    }
}
