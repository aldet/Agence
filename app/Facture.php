<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $fillable=['date_facture','montant_facture'];
      
    public function contrat()
    {
        return $this->belongsTo('App\Contrat');
    }
}
