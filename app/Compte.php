<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $fillable = array(
        'clients_id', 'typecomptes_id', 'agence_id', 'num_compte',
        'cle_rip', 'frais_ouverture', 'agio', 'date_ouverture'
    );
    //pour donner les attribut de nos table
    
    public static $rules = array(
        'clients_id' => 'required|integer',
        'typecomptes_id' => 'required|integer',
        'nom' => 'required|min:2'
    );
    //definir les contrainte
    public function typecompte()
    {
        return $this->belongsTo('App\Typecompte');
        //pour dir que dun compte peut avoir un seule type
    }
}
