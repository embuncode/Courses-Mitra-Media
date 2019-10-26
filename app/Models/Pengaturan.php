<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    protected $table = 'pengaturans';
    
    protected $fillable = [
        'name_home', 'name_profil', 'gambar_home', 'gambar_profil', 'deskripsi', 'visi', 'misi', 'keunggulan', 'sambutan'
    ];
}
