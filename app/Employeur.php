<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employeur extends Model
{
    protected $fillable = array('numIdentification','raisonSocial',
                                'nom_employeur','adresse_employeur');
    //pour donner les attribut de nos table
    public static $rules = array('libelle'=>'required|min:5');  
    //definir les contrainte

    public function clients()
    {
        return $this->hasMany('App\Client');
        //pour dir que le typeclient est associe a plisieur client
    }
}