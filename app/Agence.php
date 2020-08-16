<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    protected $fillable = array('regions_id','nom');
    //pour donner les attribut de nos table
    public static $rules = array('regions_id'=>'required|integer',
                                'nom'=>'required|min:2');  
    //definir les contrainte
    public function regions()
    {
        return $this->hasMany('App\Region');
        //pour dir que dans une region on peut avoir plusieurs agences
    }
}
