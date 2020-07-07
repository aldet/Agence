<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    protected $fillable=['marque_vehicule'];

    public function vehicules()
    {
        return $this->hasMany('App\Vehicule');
    }
}
