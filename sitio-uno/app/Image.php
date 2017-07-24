<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model{

    protected $table = "news";
    protected $fillable = ['imagen_notica','id_noticia'];

    public function news(){
        return $this->belongsTo('App\News');
    }
}