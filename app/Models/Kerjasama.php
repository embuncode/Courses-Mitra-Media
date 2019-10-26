<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kerjasama extends Model
{
    protected $table = 'kerjasamas';
    
    protected $fillable = [
        'nama', 'gambar', 'deskripsi'
    ];
}
