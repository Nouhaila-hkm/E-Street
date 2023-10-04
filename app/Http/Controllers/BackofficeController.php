<?php

namespace App\Http\Controllers;

use App\Models\Magasin;
use App\Models\Manager;
use App\Models\Catalogue;
use App\Models\Produit;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class BackofficeController extends BaseController
{
    public function promo(){

        return view('partials/bo/promo');
    }
    public function catalogue(){
        $magasin = Magasin::where('id',2)->get()->first();
        $manager = Manager::where('id',1)->get()->first();
        if($magasin){
            $catalogue = Catalogue::where('magasinId', $magasin->id)->get();
            return view('partials/bo/catalogue',compact('magasin','catalogue'));
        }else{
            return view('Bo/catalogue/catalogue_empty', compact('manager'));
        }
    }
    
    public function magasin(){
        $manager = Manager::where('id',1)->get()->first();
        $magasin = Magasin::where('managerId', $manager->id)->get();
        return view('partials/bo/magasin', compact('manager','magasin'));
    }
    public function dashboard(){

        return view('partials/bo/dashboard');
    }
    public function profile(){

        return view('partials/bo/profile');
    }
    public function produit(){
        $magasin = Magasin::where('id',2)->get()->first();
        $catalogue = Catalogue::where('id',1)->get()->first();
        if($catalogue){
            $produit = Produit::where('catalogueId', $catalogue->id)->get();
            return view('partials/bo/produit',compact('catalogue','produit'));
        }else{
            return view('Bo/produit/produit_empty', compact('magasin'));
        }
    }
    public function abonnement(){

        return view('partials/bo/abonnement');
    }

    
}