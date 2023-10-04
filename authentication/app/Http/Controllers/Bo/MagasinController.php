<?php

namespace App\Http\Controllers\Bo;

use App\Models\User;
use App\Models\Magasins;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MagasinController extends BaseController
{
    public function __construct()
    {
        // $this->middleware('auth')->except(['bar']); // la verification est nécessaire sauf pour bar
        $this->middleware('auth');
    }
    public function index(){
        return view('home');
    }

    public function created(Request $request){
        $userId = Auth::id();
        $manager = User::where('id',$userId)->get()->first();
        return view('Bo/magasin/addmag', compact('manager'));
    }

    public function addMagasin(Request $request, User $user){
        $magasin = new Magasins();
        $userId = Auth::id();
        $allForm = $request->all();
        
        $magasin->userId = $userId;
        $magasin->nom = $allForm['nom'];
        
        $magasin->adresse = $allForm['adresse'];
        $magasin->email = $allForm['email'];
        $magasin->tel = $allForm['tel'];
        $magasin->save();
        return redirect()->route('magasinPage')
                         ->with('success', 'Le magasin a été creer avec succès.');
        
    }

    public function deleteMagasin(Request $request, Magasins $magasin){
        DB::table('magasins')->where('id', $magasin->id)->delete();
        return redirect()->route('magasinPage')
                         ->with('success', 'Le catalogue a été supprimer.');
    }

    public function updateFormMagasin(Request $request, Magasins $magasin){
        return view('Bo/magasin/updatemag', compact('magasin'));
    }

    public function updateMagasin(Request $request, Magasins $magasin){
        $allForm = $request->all();
        
        DB::table('magasins')
                        ->where('id', $magasin->id)
                        ->update([
                            'nom' => $allForm['nom'],
                            'adresse' => $allForm['adresse'],
                            'email' => $allForm['email'],
                            'tel' => $allForm['tel']
                            ]);
             
        // $magasin->adresse = $allForm['adresse'];
        // $magasin->email = $allForm['email'];
        // $magasin->tel = $allForm['tel'];
        // $magasin->update();
        return redirect()->route('magasinPage')
                         ->with('success', 'Le magasin a été mis à jour avec succès.');
    }
    
    
    
    
}

