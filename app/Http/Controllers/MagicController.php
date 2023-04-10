<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use App\Models\Magic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MagicController extends Controller
{
    public function index(){
        $data = Magic::all();
        return view('magics.index',['magics'=>$data]);
    }

    public function create(){
        $user = Auth::user();

        if(!isset($user)) {
            return redirect()->route('login.show');
        }

        return view('magics.create');
    }

    public function store(Request $request){
        $user = Auth::user();

        if(!isset($user)) {
            return redirect()->route('login.show');
        }

        $request->validate([
            'nom'=>'required|string|min:3|max:50|unique:magics,nom',
            'description'=>'required|string|min:0|max:100',
            'specialite'=>'required|string|min:3|max:50|in:Guerrier,Mage,Druide,Assassin,Berserker,Archer',
            //'groupe'=>'required|string|min:0|max:100',
          
        ]);

       //$test = Groupe::where('nom', $request->groupe)->first();

       $data = Magic::create([
            'nom'=>$request->nom,
            'description'=>$request->description,
            'specialite'=>$request->specialite,
            'magie'=>rand(0,14),
            'force'=>rand(0,14),
            'agilite'=>rand(0,14),
            'intelligence'=>rand(0,14),
            'pv'=>rand(20,50),
            'groupe'=>$request->groupe,
           // 'groupe_id' => $test->id,
            'user_id'=> optional(auth()->user())->id,
        ]);

        return view('magics.store',['magic'=>$data]);

    }

    public function show($magic){
        $user = Auth::user();

        if(!isset($user)) {
            return redirect()->route('login.show');
        }

        $data = Magic::where('nom',$magic)->first();

        if(!$data){
            return view('magics.error',['message'=>"Ce personnage n'existe pas!"]);
        }

        return view('magics.show',['nom'=>$magic,'details'=>$data]);

    }

    public function edit($magic){
        $user = Auth::user();

        if(!isset($user)) {
            return redirect()->route('login.show');
        }
        
        $data = Magic::where('nom',$magic)->first();

        if(!$data){
            return view('magics.error',['message'=>"Ce personnage n'existe pas!"]);
        }

        return view('magics.edit',['details'=>$data]);
    }

    public function update($magic, Request $request){

        $user = Auth::user();

        if(!isset($user)) {
            return redirect()->route('login.show');
        }

        $request->validate([
            'nom'=>'required|string|min:3|max:50|unique:magics,nom',
            'description'=>'required|string|min:0|max:100',
            'specialite'=>'required|string|min:3|max:50|in:Guerrier,Mage,Druide,Assassin,Berserker,Archer',
            'groupe'=>'required|string|min:0|max:100',
          
        ]);

        $data = Magic::where('nom',$magic)->first();

        if(!$data){
            return view('magics.error',['message'=>"Ce personnage n'existe pas!"]);
        }

        $data->nom = $request->nom;
        $data->description = $request->description;
        $data->specialite = $request->specialite;
        $data->groupe = $request->groupe;

        $data->save();

        return view('magics.update',['magic'=>$data]);

    }

    public function destroy($magic){
        $user = Auth::user();

        if(!isset($user)) {
            return redirect()->route('login.show');
        }
        
        $data = Magic::where('nom',$magic)->first();

        if(!$data){
            return view('magics.error',['message'=>"Ce personnage n'existe pas!"]);
        }

        $data->delete();

        return view('magics.destroy',['magic'=>$data]);       

    }

    public function search()
    {
        return view('magics.search');
    }

    public function filter(Request $request )
    {        
       $data = Magic::where('nom','LIKE','%'.$request->nom.'%')->get();   
       
       if(!$data) {
        return view('magics.error',['message'=>"Aucun Magic trouvé!"]);       
       }

       $request->validate
       ([
       'nom'=>'required|string|min:3|max:50',
       ]);  
       return view('magics.filter',['results'=>$data]);
    }

    public function searchspecialite()
    {
        return view('magics.searchspecialite');
    }

    public function filterspecialite(Request $request )
    {        
       $data = Magic::where('specialite',$request->specialite)->get();   
       
       if(!$data) {
        return view('magics.error',['message'=>"Aucun Magic trouvé!"]);       
       }

       $request->validate
       ([
        'specialite'=>'required|string|min:3|max:50|in:Guerrier,Mage,Druide,Assassin,Berserker,Archer',
       ]);  
       return view('magics.filter',['results'=>$data]);
    }


}
