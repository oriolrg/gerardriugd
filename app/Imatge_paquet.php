<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imatge_paquet extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'imatge', 'id_projecte',
    ];
    protected $table = 'table_imatges_paquet';
}
