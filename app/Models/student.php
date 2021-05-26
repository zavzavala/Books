<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $table='students';

    public function relUsers()
    {
        return $this->hasOne('App\User', 'id', 'id_user');
        //return $this->hasOne('App\User', 'ChavePrimaria', 'chaveLocal');
    }
    
}
