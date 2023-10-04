<?php

namespace App\Http\Controllers\Bo;

use App\Models\Catalogue;
use App\Models\Magasin;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;


class CatalogueController extends BaseController
{
    public function index(){

        return view('home');
    }

    public function created(Request $request, Magasin $magasin){
        
        return view('Bo/catalogue/addcat', compact('magasin'));
    }

    public function addCatalogue(Request $request, Magasin $magasin){
        $catalogue = new Catalogue();
        $allForm = $request->all();
        
        $catalogue->magasinId = $magasin->id;
        $catalogue->nom = $allForm['nom'];
        $catalogue->reference = $allForm['reference'];
        $catalogue->type = $allForm['type'];
        $catalogue->save();
        return redirect()->route('cataloguePage')
                         ->with('success', 'Le catalogue a été creer avec succès.');
        
    }


    public function deleteCatalogue(Request $request, Catalogue $catalogue){
        DB::table('catalogues')->where('id', $catalogue->id)->delete();
        return redirect()->route('cataloguePage')
                         ->with('success', 'Le catalogue a été supprimer.');
    }

    public function updateFormCatalogue(Request $request, Catalogue $catalogue){
        return view('Bo/catalogue/updatecat', compact('catalogue'));
    }

    public function updateCatalogue(Request $request, Catalogue $catalogue, Magasin $magasin){
        $allForm = $request->all();
        
        DB::table('catalogues')
                        ->where('id', $catalogue->id)
                        ->update([
                            'magasinId' =>  $magasin->id,
                            'nom' => $allForm['nom'],
                            'reference' => $allForm['reference'],
                            'type' => $allForm['type']
                            ]);
             
        
        return redirect()->route('cataloguePage')
                         ->with('success', 'Le catalogue a été mis à jour avec succès.');
    }
    
    
}

