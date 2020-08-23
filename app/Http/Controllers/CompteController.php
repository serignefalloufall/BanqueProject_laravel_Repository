<?php

namespace App\Http\Controllers;
use App\Client;
use App\Typecompte;
use App\Agence;
use App\Compte;
use Illuminate\Http\Request;

class CompteController extends Controller
{
    
    public function add(){

        $data['today'] = date("d/m/y"); 
		$data['numcompte'] = 'Cmpt-'.$data['today']; 
        $data['cleRip'] = 'Cle-rip-'.$data['today']; 
        $data['typecomptes'] = Typecompte::all();
        $data['clients'] = Client::all();
        $data['agences'] = Agence::all();

        return view('compte.add',$data);
    }

    public function persist(Request $request){

        if(isset($request->btnAjouter))
        {
            if ($request->typecomptes_id == '1')
            {
                $compte = new Compte();
                $compte->clients_id = $request->clients_id;
                $compte->typecomptes_id = $request->typecomptes_id;
                $compte->agences_id = $request->agences_id;
                $compte->num_compte = $request->num_compte;
                $compte->cle_rip = $request->cle_rip;
                $compte->frais_ouverture = $request->frais_ouverture;
                $compte->date_ouverture = $request->date_ouverture;

                $data['ok'] = $compte->save();
                return view('compte.add',$data);

            }else if ($request->typecomptes_id == '2') 
            {
                $compte = new Compte();
                $compte->clients_id = $request->clients_id;
                $compte->typecomptes_id = $request->typecomptes_id;
                $compte->agences_id = $request->agences_id;
                $compte->num_compte = $request->num_compte;
                $compte->cle_rip = $request->cle_rip;
                $compte->agio = $request->agio;
                $compte->date_ouverture = $request->date_ouverture;

                $data['ok'] = $compte->save();
                return view('compte.add',$data);

            }else if ($request->typecomptes_id == '3') 
            {  
                $compte = new Compte();
                $compte->clients_id = $request->clients_id;
                $compte->typecomptes_id = $request->typecomptes_id;
                $compte->agences_id = $request->agences_id;
                $compte->num_compte = $request->num_compte;
                $compte->cle_rip = $request->cle_rip;
                $compte->frais_ouverture = $request->frais_ouverture;
                $compte->date_ouverture = $request->date_ouverture;
                $compte->date_fermuture = $request->date_fermuture;
               
                $data['ok'] = $compte->save();
                return view('compte.add',$data);
            }
        }
       
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
