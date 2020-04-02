<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Nosaltres extends Model
{
    use HasTranslations;

    protected $table = 'table_nosaltres';

    public $translatable = ['descripcioCurta', 'descripcioLlarga', 'titol', 'textCurt', 'textLlarg'];
}
