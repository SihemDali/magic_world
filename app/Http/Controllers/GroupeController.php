<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use App\Models\Magic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupeController extends Controller
{
    public function index(){
        $data = Groupe::all();
        return view('groupes.index',['groupes'=>$data]);
    }

    public function create(){
        $user = Auth::user();

        if(!isset($user)) {
            return redirect()->route('login.show');
        }

        return view('groupes.create');
    }

    public function store(Request $request){
        $user = Auth::user();

        if(!isset($user)) {
            return redirect()->route('login.show');
        }

        $request->validate([
            'nom'=>'required|string|min:3|max:100|unique:groupes,nom',
            'description'=>'required|string|min:0',
            'nombreDePlaces'=>'required|integer|max:50',          
       
        ]);
       $data = Groupe::create([
            'nom'=>$request->nom,
            'description'=>$request->description,
            'nombreDePlaces'=>$request->nombreDePlaces,          
            'user_id' => $user->id
        ]);

        return view('groupes.store',['groupe'=>$data]);

    }

    public function show($groupe){
        $user = Auth::user();

        if(!isset($user)) {
            return redirect()->route('login.show');
        }

        $details = Groupe::where('nom',$groupe)->first();
        $personnages = Magic::where('groupe_id', $details->id);
        //dd($personnages);

        if(!$details){
            return view('groupes.error',['message'=>"Ce groupe n'existe pas!"]);
        }

        return view('groupes.show',['nom'=>$groupe,'details'=>$details, 'personnages'=>$personnages]);

    }

    public function edit($groupe){
        $user = Auth::user();

        if(!isset($user)) {
            return redirect()->route('login.show');
        }
        
        $data = Groupe::where('nom',$groupe)->first();

        if(!$data){
            return view('groupes.error',['message'=>"Ce groupe n'existe pas!"]);
        }

        return view('groupes.edit',['details'=>$data]);
    }

    public function update($groupe, Request $request){

        $user = Auth::user();

        if(!isset($user)) {
            return redirect()->route('login.show');
        }

        $request->validate([
            'nom'=>'required|string|min:3|max:100|unique:groupes,nom',
            'description'=>'required|string|min:0',
            'nombreDePlaces'=>'required|integer|max:50', 
          
        ]);

        $data = Groupe::where('nom',$groupe)->first();

        if(!$data){
            return view('groupes.error',['message'=>"Ce groupe n'existe pas!"]);
        }

        $data->nom = $request->nom;
        $data->description = $request->description;
        $data->nombreDePlaces = $request->nombreDePlaces;

        $data->save();

        return view('groupes.update',['groupe'=>$data]);

    }

    public function destroy($groupe){
        $user = Auth::user();

        if(!isset($user)) {
            return redirect()->route('login.show');
        }
        
        $data = Groupe::where('nom',$groupe)->first();

        if(!$data){
            return view('groupes.error',['message'=>"Ce groupe n'existe pas!"]);
        }

        $data->delete();

        return view('groupes.destroy',['groupe'=>$data]);       

    }
}
