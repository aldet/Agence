<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * @package App
 * @property int $id
 * @property string $nom_client
 * @property string $prenom
 * @property string $num_permis
 * @property string $pays
 * @property string $email
 * @property string $telephone
 * @property string $code_postal
 */
class Client extends Model
{
    protected $fillable = ['nom_client','num_permis','prenom','telephone','email','pays','code_postal','agence_id'];

    public function agence()
    {
        return $this->belongsTo('App\Agence');
    }
    
     public function vehicule()
        
         {
             return $this->belongsTo('App\Vehicule');
         }
     
    
}


