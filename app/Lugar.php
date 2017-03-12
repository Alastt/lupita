<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $table = "lugares";

    protected $fillable = ['nombre', 'descripcion'];

    public function producto(){
        return $this->hasMany('App\Producto');
    }
}
