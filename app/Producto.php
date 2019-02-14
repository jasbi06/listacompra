<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public static function todasLasCategorias(){
        $arrayCategorias=self::select('categoria')->distinct()->get();
        return $arrayCategorias;
    }

    public static function Categorias($cat = null){
        $arrayCategorias=self::where('categoria',$cat)->get();
        return $arrayCategorias;
    }

    public function categoriaVistas(){
        return $this->categoria;
    }
}
