<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarification extends Model
{
    protected $fillable=['nom_tarification','montant','id_categorie'];

    public function categorie()
    {
        return $this->belongsTo('App\Categorie', 'id_categorie');
    }
}
