<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    
    public function add(){
        return view('compte.add');
    }

    public function persist(Request $request){

        $compte = new Compte();
        $compte->nom = $request->nom;
        $data['ok'] = $compte->save();
       
        return view('compte.add',$data);
    }

    public function liste(){

       // $comptes = Compte::paginate(2);
        $comptes = Compte::all();
        return view('compte.liste',['comptes'=>$comptes]);
    }

    public function edit($id){

        $data['compte'] = Compte::find($id);
        if($data['compte']  != null)
        {
            return view('compte.edit', $data);
        }
        return view('compte.edit');
    }

    public function update(Request $request){

        $compte = Compte::find($request->id);
        $compte->nom = $request->nom;
        $data['ok'] = $compte->save();
        return $this->liste();
    }

    public function delete($id){

        $compte = Compte::find($id);
        if($compte != null)
        {
            $compte->delete();
        }
        
        return $this->liste();
    }
}
