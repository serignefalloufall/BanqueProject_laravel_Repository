<?php

namespace App\Http\Controllers;

use App\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function add(){
        return view('region.add');
    }

    public function persist(Request $request){

        $region = new Region();
        $region->nom = $request->nom;
        $data['ok'] = $region->save();
       
        return view('region.add',$data);
    }

    public function liste(){

        $regions = Region::all();
        return view('region.liste',['regions'=>$regions]);
    }

    public function edit($id){
        return view('region.edit');
    }

    public function update(){
        return $this->liste();
    }

    public function delete($id){
        return $this->liste();
    }
}

