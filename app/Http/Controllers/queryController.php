<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class queryController extends Controller
{

    public function home(){
        return view('home');
    }
    public function signup(){
        return view('signup');
    }
    public function adduser(Request $req){
       $req->validate([
        'name' => 'required|min:3',
        'email' => 'required|email',
        'password' => 'required|min:3',
       ]);

       $users = User::create([
        'name' => $req->name,
        'email' => $req->email,
        'password' => $req->password,
       ]);
       return redirect()->route('signin')->with('signupSuccess','Account Has Been Created Now You Can Login');
    }

    
    public function signin(){
        return view('signin');
    }
    
}
