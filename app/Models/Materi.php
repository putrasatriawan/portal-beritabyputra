<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $table = 'materi';

    protected $hidden = [];

    protected $fillable = ([
        'judul_materi', 'slug', 'link', 'deskripsi', 'playlist_id', 'is_active', 'gambar_materi'
    ]);

    public function playlist()
    {
        return $this->belongsTo(Playlist::class, 'playlist_id', 'id');
    }
}