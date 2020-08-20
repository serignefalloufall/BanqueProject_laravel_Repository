<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = array('nom');
    //pour donner les attribut de nos table
    public static $rules = array('nom'=>'required|min:2');  
    //definir les contrainte

    public function agences()
    {
        return $this->hasMany('App\Agence');
        //pour dir que l'agence est associe a une region
    }


}
