<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typecompte extends Model
{
    protected $fillable = array('libelle');
    //pour donner les attribut de nos table
    public static $rules = array('libelle'=>'required|min:5');  
    //definir les contrainte

    public function comptes()
    {
        return $this->hasMany('App\Compte');
        //pour dir que le typeclient est associe a plisieur client
    }
}
