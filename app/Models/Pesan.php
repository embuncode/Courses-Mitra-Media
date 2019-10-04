<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $table = 'pesans';
    
    protected $fillable = [
        'name', 'email', 'subject', 'message', 'status',
    ];
}
