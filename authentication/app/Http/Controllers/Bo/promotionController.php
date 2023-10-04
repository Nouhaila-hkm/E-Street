<?php

namespace App\Http\Controllers\Bo;

use App\Models\Catalogues;
use App\Models\Magasins;
use App\Models\Produits;
use App\Models\Promotions;
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

    public function created(Request $request, Produits $produits){
        $userId = Auth::id();
        $manager = User::where('id',$userId)->get()->first();
        $magasin = Magasins::where('userId', $manager->id)->get();
        $produits = Produits::where('userId', $manager->id)->get();
        // dd($magasin);
        return view('Bo/Promotion/addPromo', compact('produits'));
    }

    public function addPromotion(Request $request){
        $Promotions = new Promotions();
        $allForm = $request->all();
        
        $Promotions->produitId = $allForm['produitId'];
        $Promotions->dateDebut = $allForm['dateDebut'];
        $Promotions->dateFin = $allForm['dateFin'];
        $Promotions->prixorg = $allForm['prixorg'];
        $Promotions->prixsold = $allForm['prixsold'];
        $Promotions->save();
        return redirect()->route('promotionPage')
                         ->with('success', 'La Promotion a été creer avec succès.');
        
    }


    public function deletePromotion(Request $request, Promotions $promotion){
        DB::table('Promotions')->where('id', $promotion->id)->delete();
        return redirect()->route('promotionPage')
                         ->with('success', 'La promotion a été supprimer.');
    }

    public function updateFormPromotion(Request $request, Promotions $promotion){
        $magasinName = DB::table('Promotions')->where('id', $promotion->magasinId)->get()->first();
        $magasinName = $magasinName->nom;
        return view('Bo/catalogue/updatepromo', compact('Promotion','magasinName'));
    }

    public function updateCatalogue(Request $request, Promotions $promotion, Produits $produit){
        $allForm = $request->all();
        
        DB::table('Promotions')
                        ->where('id', $promotion->id)
                        ->update([
                            'dateDebut' => $allForm['dateDebut'],
                            'dateFin' => $allForm['dateFin'],
                            'prixorg' => $allForm['prixorg'],
                            'prixsold' => $allForm['prixsold']
                            ]);
             
        
        return redirect()->route('promotionPage')
                         ->with('success', 'La promotion a été mis à jour avec succès.');
    }
    
    
}

