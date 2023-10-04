<?php

namespace App\Http\Controllers\Bo;

use App\Models\Catalogues;
use App\Models\Magasins;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CatalogueController extends BaseController
{
    public function index(){

        return view('home');
    }

    public function created(Request $request, Magasins $magasin){
        $userId = Auth::id();
        $manager = User::where('id',$userId)->get()->first();
        $magasin = Magasins::where('userId', $manager->id)->get();
        // dd($magasin);
        return view('Bo/catalogue/addcat', compact('magasin'));
    }

    public function addCatalogue(Request $request){
        $catalogue = new Catalogues();
        $allForm = $request->all();
        
        $catalogue->magasinId = $allForm['magasinId'];
        $catalogue->nom = $allForm['nom'];
        $catalogue->reference = $allForm['reference'];
        $catalogue->type = $allForm['type'];
        $catalogue->save();
        return redirect()->route('cataloguePage')
                         ->with('success', 'Le catalogue a été creer avec succès.');
        
    }


    public function deleteCatalogue(Request $request, Catalogues $catalogue){
        DB::table('catalogues')->where('id', $catalogue->id)->delete();
        return redirect()->route('cataloguePage')
                         ->with('success', 'Le catalogue a été supprimer.');
    }

    public function updateFormCatalogue(Request $request, Catalogues $catalogue){
        $magasinName = DB::table('magasins')->where('id', $catalogue->magasinId)->get()->first();
        $magasinName = $magasinName->nom;
        return view('Bo/catalogue/updatecat', compact('catalogue','magasinName'));
    }

    public function updateCatalogue(Request $request, Catalogues $catalogue, Magasins $magasin){
        $allForm = $request->all();
        
        DB::table('catalogues')
                        ->where('id', $catalogue->id)
                        ->update([
                            'nom' => $allForm['nom'],
                            'reference' => $allForm['reference'],
                            'type' => $allForm['type']
                            ]);
             
        
        return redirect()->route('cataloguePage')
                         ->with('success', 'Le catalogue a été mis à jour avec succès.');
    }
    
    
}

