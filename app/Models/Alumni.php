<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = 'alumnis';
    
    protected $fillable = [
        'nama', 'nis', 'email', 'tmpt_lahir', 'tgl_lahir', 'no_telepon', 'agama', 'picture', 'gender', 'alamat', 'testimoni',
    ];
}
