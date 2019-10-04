<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'beritas';
    
    protected $fillable = [
        'judul', 'deskripsi', 'author', 'image',
    ];

    public function berita(){
    	return 
        $this->hasMany('App\Models\Kategori');
        $this->hasMany('App\Models\Komentar');
    }
    
}