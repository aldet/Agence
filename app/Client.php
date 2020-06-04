<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['nom_client','num_permis','prenom','telephone','email','pays','code_postal','agence_id'];

    public function agence(){
        
            return $this->belongsTo('App\Agence');
        }
    
}


