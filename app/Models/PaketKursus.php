<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaketKursus extends Model
{
    protected $table = 'paket_kursuses';
    
    protected $fillable = [
        'judul_kursus', 'tujuan', 'pengajar_id', 'materi', 'total_kursi', 'jumlah_siswa', 'biaya', 'mulai_jam', 'selesai_jam', 'masa_kursus', 'gambar'
    ];

    public function PaketKursus(){
      return $this->hasMany('App\Models\Pengajar');
    }
}
