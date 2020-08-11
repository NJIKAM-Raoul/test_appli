<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfant extends Model
{
    protected $fillable = ['nom', 'prenom', 'datenaiss', 'lieunaiss', 'sexe', 
    'quartier', 'lieuculte', 'nompere', 'nommere', 'classe', 'niveau'];
    protected $dates = ['created_at','updated_at'];
    protected $primaryKey = 'id';
}
