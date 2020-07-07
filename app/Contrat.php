<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
 
     protected $fillable=['date_depat','date_retour_prevu','date_retour','montant_acompte','km_depart','montant_journalier'];

     public function facture()
    {
        return $this->hasOne('App\Facture');
    }

   }


