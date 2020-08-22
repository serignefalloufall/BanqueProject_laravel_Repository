<?php

namespace App\Http\Controllers;
use App\Typeclient;
use App\Employeur;
use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function add(){

        $data['typeclients'] = Typeclient::all();
        $data['employeurs'] = Employeur::all();

        return view('client.add', $data);
    }

    public function persist(Request $request){
        // echo $request->btnAjouter;
        // die;
        if(isset($request->btnAjouter))
        {
            if ($request->typeclients_id == '3')
            {
                $emp = new Employeur();
                $emp->numIdentification = $request->numIdentification;
                $emp->raisonSocial = $request->raisonSocial;
                $emp->nom_employeur = $request->nom_employeur;
                $emp->adresse_employeur = $request->adresse_employeur;
                $client->profession = $request->profession;
                $client->salaire = $request->salaire;

                $data['ok'] = $emp->save();
                return view('client.add',$data);

            }else if ($request->typeclients_id == '1') 
            {
                $client = new Client();
                $client->typeclients_id = $request->typeclients_id;
                $client->nom = $request->nom;
                $client->prenom = $request->prenom;
                $client->adresse = $request->adresse;
                $client->tel = $request->tel;
                $client->email = $request->email;
                $data['ok'] = $client->save();
                return view('client.add',$data);

            }else if ($request->typeclients_id== '2') 
            {
                $client = new Client();

                $client->typeclients_id = $request->typeclients_id;
                $client->nom = $request->nom;
                $client->prenom = $request->prenom;
                $client->adresse = $request->adresse;
                $client->tel = $request->tel;
                $client->email = $request->email;
               
                $data['ok'] = $client->save();
                return view('client.add',$data);
            }
        }
       
    }

    public function liste(){

       // $clients = Client::paginate(2);
        $clients = Client::all();
        return view('client.liste',['clients'=>$clients]);
    }

    public function edit($id){

        $data['client'] = Client::find($id);
        if($data['client']  != null)
        {
            return view('client.edit', $data);
        }
        return view('client.edit');
    }

    public function update(Request $request){

        $client = Client::find($request->id);
        $client->nom = $request->nom;
        $data['ok'] = $client->save();
        return $this->liste();
    }

    public function delete($id){

        $client = Client::find($id);
        if($client != null)
        {
            $client->delete();
        }
        
        return $this->liste();
    }
}
