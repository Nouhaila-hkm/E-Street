<?php

namespace App\Http\Controllers\Bo;

use App\Models\Manager;
use App\Models\Magasin;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class MagasinController extends BaseController
{
    public function index(){

        return view('home');
    }

    public function created(Request $request, Manager $manager){
        
        return view('Bo/magasin/addmag', compact('manager'));
    }

    public function addMagasin(Request $request, Manager $manager){
        $magasin = new Magasin();
        $allForm = $request->all();
        
        $magasin->managerId = $manager->id;
        $magasin->nom = $allForm['nom'];
        
        $magasin->adresse = $allForm['adresse'];
        $magasin->email = $allForm['email'];
        $magasin->tel = $allForm['tel'];
        $magasin->save();
        return redirect()->route('magasinPage')
                         ->with('success', 'Le magasin a été creer avec succès.');
        
    }

    public function deleteMagasin(Request $request, Magasin $magasin){
        DB::table('magasins')->where('id', $magasin->id)->delete();
        return redirect()->route('magasinPage')
                         ->with('success', 'Le catalogue a été supprimer.');
    }

    public function updateFormMagasin(Request $request, Magasin $magasin){
        return view('Bo/magasin/updatemag', compact('magasin'));
    }

    public function updateMagasin(Request $request, Magasin $magasin){
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

