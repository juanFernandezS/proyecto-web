<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected  $fillable =['titulo','cuerpo_noticia','imagen_noticia','estado','fecha_creacion','id_noticia','rut'];

    public function users(){
        return $this->belongsTo('App\User');
    }
}
