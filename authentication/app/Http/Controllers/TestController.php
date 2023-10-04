<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth')->except(['bar']); // la verification est nécessaire sauf pour bar
        $this->middleware('auth');
    }

    public function foo(User $user){
        $userId = Auth::id();
        dd($userId);
        return view('test.foo');
    }

    public function bar(User $user){
        return view('test.bar');
    }
}
