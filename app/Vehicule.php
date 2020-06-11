<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehicule
 * @package App
 * @property int $id
 * @property string $nom
 * @property string $num_matriculation
 * @property integer $km_compteur
 * @property Carbon $date_achat
 * @property string $photo_vehicule
 * @property string $carte_grise
 * @property int $agence_id
 */



class Vehicule extends Model
{
    protected $fillable=['nom','num_matriculation','km_compteur','date_achat','photo_vehicule','carte_grise'];
}
