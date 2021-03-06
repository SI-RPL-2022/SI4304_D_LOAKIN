<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    
    use HasFactory;
    protected $table = 'alamats';

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }
}
