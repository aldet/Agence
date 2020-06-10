<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
*Class Vehicule
*@package App
*@property int $id
*@property string $nom
*@property string $num_matriculation
*@property string $km_compteur
*@property date $date_achat
*@property string $photo_vehicule
*@property string $carte_grise
 */



class Vehicule extends Model
{
    protected $fillable=['nom','num_matriculation','km_compteur','date_achat','photo_vehicule','carte_grise'];
}
