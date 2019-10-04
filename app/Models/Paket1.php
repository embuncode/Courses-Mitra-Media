<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paket1 extends Model
{
    protected $table = 'paket1s';
    
    protected $fillable = [
        'nama', 'tujuan', 'materi', 'mulai_jam', 'selesai_jam', 'masa_kursus', 'picture',
    ];
}
