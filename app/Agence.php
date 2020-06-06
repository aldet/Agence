<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * @package App
 * @property int $id
 * @property string $nom_agence
 * @property string $pays
 * @property string $ville
 * @property string $adresse_agence
 * @property string $email_agence
 * @property string $code_postal
 * @property string $telephone
 */
class Agence extends Model
{
    protected $fillable = ['nom_agence','pays','ville','adresse_agence','email_agence','code_postal','telephone'];

    public function clients()
    {
        return $this->hasMany('App\Client');
    }
    
}
