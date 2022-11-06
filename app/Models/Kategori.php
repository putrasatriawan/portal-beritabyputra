<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';

    protected $fillable = ([
        'nama_kategori', 'slug', 'is_active'
    ]);

    protected $hidden = [];

    // public function Artikel()
    // {
    //     return $this->hasMany(Artikel::class, 'kategori_id', 'id');
    // }
}