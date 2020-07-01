<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarification extends Model
{
    protected $fillable=['nom_tarification','montant'];
}
