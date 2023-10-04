<?php

namespace App\Http\Controllers;
use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class RegisterController extends BaseController
{
    public function login(){

        return view('Register/login');
    }


    public function inscription(){

        return view('Register/inscription');
    }

    public function inscriptionSuccess(){

        return view('Register/success');
    }

    public function createAccount(Request $request){
        $manager = new Manager();
        $allForm = $request->all();
        // $manager = Manager::create($request->all());
        $manager->nom = $allForm['nom'];
        $manager->prenom = $allForm['prenom'];
        $manager->tel = $allForm['tel'];
        $manager->login = $allForm['login'];
        $manager->mdp = md5($allForm['mdp']);
        $manager->save();
        return redirect()->route('register.inscriptionsuccess');
        
    }
    
    public function loginAccess(Request $request){
        dd($request);
    }
    
    
}