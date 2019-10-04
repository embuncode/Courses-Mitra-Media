<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = 'komentars';
    
    protected $fillable = [
        'berita_id', 'nama', 'email', 'komentar',
    ];

    public function komentar(){
    	return $this->hasMany('App\Model\Berita');
    }
}
