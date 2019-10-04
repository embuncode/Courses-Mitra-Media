<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    
    protected $fillable = [
        'nama', 'nis', 'email', 'tmpt_lahir', 'tgl_lahir', 'no_telepon', 'agama', 'picture', 'gender', 'alamat',
    ];
}
