<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Projecte extends Model
{
    use HasTranslations;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'imatge', 'titol', 'data','frase', 'descripcio', 'instagram',
    ];
    protected $table = 'table_projecte';
    public $translatable = ['descripcioCurta', 'descripcioLlarga'];
}
