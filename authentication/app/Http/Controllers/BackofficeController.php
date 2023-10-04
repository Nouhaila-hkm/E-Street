<?php

namespace App\Http\Controllers;

use App\Models\Magasins;
use App\Models\Manager;
use App\Models\User;
use App\Models\Catalogues;
use App\Models\Produit;
use App\Models\Produits;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;


class BackofficeController extends BaseController
{
    public function __construct()
    {
        // $this->middleware('auth')->except(['bar']); // la verification est nécessaire sauf pour bar
        $this->middleware('auth');
    }
    public function promotion(){

        return view('partials/bo/promo');
    } 
    public function catalogue(){
        $userId = Auth::id();
        $manager = User::where('id',$userId)->get()->first();
        $magasin = Magasins::where('userId', $manager->id)->get();
        
        if($magasin){
            
            $catalogue = DB::table('catalogues')
                        ->select('catalogues.id','catalogues.nom','catalogues.reference','catalogues.type','catalogues.magasinId')
                        ->leftJoin('magasins', 'magasins.id', '=', 'catalogues.magasinId')
                        ->where('magasins.userId', '=', $userId)
                        ->get();
            return view('partials/bo/catalogue',compact('magasin','catalogue'));            
            // $catalogue = Catalogues::where('magasinId', $magasin->id)->get();
        }else{
            return view('Bo/catalogue/catalogue_empty', compact('manager'));
        }
    }
    
    public function magasin(){
        $userId = Auth::id();
        $manager = $userId;
        $manager = User::where('id',$userId)->get()->first();
        $magasin = Magasins::where('userId', $manager->id)->get();
        return view('partials/bo/magasin', compact('manager','magasin'));
    }
    public function dashboard(){

        return view('partials/bo/dashboard');
    }
    public function profile(){

        return view('partials/bo/profile');
    }
    
    public function parametrage(){

        return view('partials/bo/parametrage');
    }

    public function produit(){
        $userId = Auth::id();
        $manager = User::where('id',$userId)->get()->first();
        $magasin = Magasins::where('userId', $manager->id)->get();
        
        // $catalogue = Catalogues::where('magasinId', $magasin->id)->get();
        if($magasin){
            $produit = DB::table('produits')
                        ->select('produits.id','produits.nomprod','produits.reference','produits.description','produits.photo','produits.datepost','produits.catalogueId')
                        ->leftJoin('catalogues', 'catalogues.id', '=', 'produits.catalogueId')
                        ->leftJoin('magasins', 'magasins.id', '=', 'catalogues.magasinId')
                        ->where('magasins.userId', '=', $userId)
                        ->get();
            // dd($produit);
            /*
            $produit = DB::table('produits')
                        ->select('produits.id','produits.nomprod','produits.reference','produits.description','produits.photo','produits.datepost','produits.catalogueId')
                        ->leftJoin('catalogues', 'catalogues.id', '=', 'produits.catalogueId')
                        ->leftJoin('catalogues', 'catalogues.id', '=', 'produits.catalogueId')
                        ->where('catalogueId.magasinId', '=', $magasin)
                        ->get();
                        */
            //$produit = Produits::where('catalogueId', $catalogue->id)->get();
            return view('partials/bo/produit',compact('produit'));
        }else{
            return view('Bo/produit/produit_empty', compact('magasin'));
        }
    }
    public function abonnement(){
        return view('partials/bo/abonnement');
    }

    public function promo(){
        $userId = Auth::id();
        $manager = User::where('id',$userId)->get()->first();

        $promotion = DB::table('promotions')
                        //->select('produits.id','produits.nomprod','produits.reference','produits.description','produits.photo','produits.datepost','produits.catalogueId')
                        ->leftJoin('produits', 'produits.id', '=', 'promotions.produitId')
                        ->leftJoin('catalogues', 'catalogues.id', '=', 'produits.catalogueId')
                        ->leftJoin('magasins', 'magasins.id', '=', 'catalogues.magasinId')
                        ->where('magasins.userId', '=', $userId)
                        ->get();     
        return view('partials/bo/promo', compact('promotion'));
    }
    
}