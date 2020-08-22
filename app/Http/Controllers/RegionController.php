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

       // $regions = Region::paginate(2);
        $regions = Region::all();
        return view('region.liste',['regions'=>$regions]);
    }

    public function edit($id){

        $data['region'] = Region::find($id);
        if($data['region']  != null)
        {
            return view('region.edit', $data);
        }
        return view('region.edit');
    }

    public function update(Request $request){

        $region = Region::find($request->id);
        $region->nom = $request->nom;
        $data['ok'] = $region->save();
        return $this->liste();
    }

    public function delete($id){

        $region = Region::find($id);
        if($region != null)
        {
            $region->delete();
        }
        
        return $this->liste();
    }
}

