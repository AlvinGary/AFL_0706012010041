<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $table = 'songs';
    protected $fillable = ['song_name', 'released', 'song_genre', 'singer'];

    public function singers()
    {
        return $this->belongsTo(Singer::class, 'singer', 'singer_code');
    }
}
