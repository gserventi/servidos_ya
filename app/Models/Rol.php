<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    public function permisos(){
        return $this->hasMany(Permiso::class,'idpermiso');
    }
    public function usuarios(){
        return $this->hasMany(Usuario::class,'idpermiso');
    }
}
