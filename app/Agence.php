<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    protected $fillable = ['nom_agence','pays','ville','adresse_agence','email_agence','code_postal','telephone'];
}
