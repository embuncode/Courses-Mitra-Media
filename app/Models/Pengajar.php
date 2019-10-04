<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengajar extends Model
{
    protected $table = 'pengajars';
    
    protected $fillable = [
        'email', 'nama_lengkap', 'alamat', 'tmpt_lahir', 'tgl_lahir', 'jenis_kelamin', 'kebangsaan',
        'status', 'agama', 'keahlian', 'no_telepon', 'picture',
    ];

    public function pengajar(){
    	return $this->hasMany('App\Models\PaketKursus');
    }
}
