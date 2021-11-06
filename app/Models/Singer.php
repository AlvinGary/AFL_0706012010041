<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    use HasFactory;

    protected $table = 'singers';
    protected $primaryKey = 'singer_code';
    protected $keyType = 'string';
    protected $fillable = ['singer_code', 'singer_name', 'debut_on', 'origin', 'genre', 'record_label'];

    public function songs()
    {
        return $this->hasMany(Song::class, 'singer', 'singer_code');
    }
}
