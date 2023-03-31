<?php

namespace App\Http\Controllers;

use App\Models\Magic;
use Illuminate\Http\Request;

class MagicController extends Controller
{
    public function index(){
        $data = Magic::all();
        return view('magics.index',['magics'=>$data]);
    }

    public function create(){
        return view('magics.create');
    }

    public function store(Request $request){
        $request->validate([
            'nom'=>'required|string|min:3|max:50|unique:magics,nom',
            'description'=>'required|string|min:0|max:100',
            'specialite'=>'required|string|min:3|max:50|in:Guerrier,Mage,Druide,Assassin,Berserker,Archer',
          
        ]);
       $data2 = Magic::create([
            'nom'=>$request->nom,
            'description'=>$request->description,
            'specialite'=>$request->specialite,
            'magie'=>rand(0,14),
            'force'=>rand(0,14),
            'agilite'=>rand(0,14),
            'intelligence'=>rand(0,14),
            'pv'=>rand(20,50),
        ]);

        return view('magics.store',['magic'=>$data2]);

    }

    public function show($magic){

        $data3 = Magic::where('nom',$magic)->first();

        if(!$data3){
            return view('magics.error',['message'=>"Ce personnage n'existe pas!"]);
        }

        return view('magics.show',['nom'=>$magic,'details'=>$data3]);

    }

    public function edit($magic){
        
        $data4 = Magic::where('nom',$magic)->first();

        if(!$data4){
            return view('magics.error',['message'=>"Ce personnage n'existe pas!"]);
        }

        return view('magics.edit',['details'=>$data4]);
    }

    public function update($magic, Request $request){
        $request->validate([
            'nom'=>'required|string|min:3|max:50|unique:magics,nom',
            'description'=>'required|string|min:0|max:100',
            'specialite'=>'required|string|min:3|max:50|in:Guerrier,Mage,Druide,Assassin,Berserker,Archer',
          
        ]);

        $data5 = Magic::where('nom',$magic)->first();

        if(!$data5){
            return view('magics.error',['message'=>"Ce personnage n'existe pas!"]);
        }

        $data5->nom = $request->nom;
        $data5->description = $request->description;
        $data5->specialite = $request->specialite;

        $data5->save();

        return view('magics.update',['magic'=>$data5]);

    }

    public function destroy($magic){
        $data6 = Magic::where('nom',$magic)->first();

        if(!$data6){
            return view('magics.error',['message'=>"Ce personnage n'existe pas!"]);
        }

        $data6->delete();

        return view('magics.destroy',['magic'=>$data6]);       

    }
}
