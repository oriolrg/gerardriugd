<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projecte extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'imatge', 'titol', 'data','frase', 'descripcio', 'instagram',
    ];
    protected $table = 'table_projecte';
}
