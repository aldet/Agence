<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable=['nom_categorie'];

    public function vehicules()
    {
        return $this->hasMany('App\Vehicule');
    }

     public function tarification()
     {
         return $this->hasOne('App\Tarification');
     }
}
