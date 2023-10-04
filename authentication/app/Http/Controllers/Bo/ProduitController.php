<?php

namespace App\Http\Controllers\Bo;

use App\Models\Catalogues;
use App\Models\Produits;
use App\Models\Magasins;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class ProduitController extends BaseController
{
    public function index(){

        return view('home');
    }

    public function created(Request $request, Catalogues $catalogue){
        $userId = Auth::id();
        $manager = User::where('id',$userId)->get()->first();
        $catalogue = DB::table('catalogues')
                        ->select('catalogues.id','catalogues.nom','catalogues.reference','catalogues.type','catalogues.magasinId')
                        ->leftJoin('magasins', 'magasins.id', '=', 'catalogues.magasinId')
                        ->where('magasins.userId', '=', $userId)
                        ->get();
        return view('Bo/produit/addprod', compact('catalogue'));
    }

    public function addProduit(Request $request, Catalogues $catalogue){
        $produit = new Produits();
        $allForm = $request->all();
        
        $produit->catalogueId = $catalogue->id;
        $produit->nomProd = $allForm['nomProd'];
        $produit->reference = $allForm['reference'];
        $produit->description = $allForm['description'];
        $produit->photo = $allForm['photo'];
        $produit->datepost = $allForm['datepost'];
        $produit->save();
        return redirect()->route('produitPage')
                         ->with('success', 'Le produit a été creer avec succès.');
        
    }


    public function deleteProduit(Request $request, Produits $produit){
        DB::table('produits')->where('id', $produit->id)->delete();
        return redirect()->route('produitPage')
                         ->with('success', 'Le produit a été supprimer.');
    }

    public function updateFormProduit(Request $request, Produits $produit){
        return view('Bo/produit/updateprod', compact('produit'));
    }

    public function updateProduit(Request $request, Catalogues $catalogue, Produits $produit){
        $allForm = $request->all();
        
        DB::table('produits')
                        ->where('id', $produit->id)
                        ->update([
                            'catalogueId' =>  $catalogue->id,
                            'nomProd' => $allForm['nomProd'],
                            'reference' => $allForm['reference'],
                            'description' => $allForm['description'],
                            'photo' => $allForm['photo'],
                            'datepost' => $allForm['datepost']

                            ]);
             
        
        return redirect()->route('cataloguePage')
                         ->with('success', 'Le produit a été mis à jour avec succès.');
    }
    
    
}

