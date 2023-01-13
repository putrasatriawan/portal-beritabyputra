<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';

    protected $fillable = ([
        'judul', 'slug', 'kategori_id', 'user_id', 'gambar_artikel', 'is_active', 'is_default', 'views', 'body'
    ]);

    protected $hidden = [];

    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori');
    }
    public function users()
    {
        return $this->belongsTo("App\Models\User");
    }
}