<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";

    protected $fillable = ['nombre', 'precio', 'cantidad', 'lugares_id', 'categorias_id'];

    public function lugar(){
        return $this->belongsTo('App\Lugar');
    }

    public function categoria(){
        return $this->belongsTo('App\Categoria');
    }
}
