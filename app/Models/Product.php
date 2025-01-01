<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'foto',
        'nama',
        'stok',
        'harga',
        'deskripsi',
        'rating',
        'seller_id',
        'kategoris_id'
    ];

    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategoris_id');
    }
}
