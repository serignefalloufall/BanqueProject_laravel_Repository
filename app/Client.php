<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = array('typeclients_id','employeurs_id','nom','prenom',
                                'adresse','tel','email','profession','salaire');
    //pour donner les attribut de nos table
    //filable pour dire c un champ
    public static $rules = array('typeclients_id'=>'required|integer',
                                'nom'=>'required|min:2');  
    //definir les contrainte
    public function typeclient()
    {
        return $this->belongsTo('App\Typeclient');
        //pour dir que un client peut avoir un seul type
    }

    public function employeur()
    {
        return $this->belongsTo('App\Employeur');
        //pour dir que un client peut avoir un seul emp
    }

    public function comptes()
    {
        return $this->hasMany('App\Compte');
        //pour dir que un client p avoir plisieur compte
    }
}
