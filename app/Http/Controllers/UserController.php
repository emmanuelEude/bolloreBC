<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $users=User::where('role','user')->get();
        return view('user.index',compact('users'));
    }
    public function create(){
        return view('user.create');
    }

    public function profil(){
        return view('user.profil');
    }

    public function account(){
        return view('user.account');
    }

    public function profil_update(Request $request){
      auth()->user()->update($request->all());
            return redirect()->route('profil.show');
         }
    public function store(Request $request){
       User::create([
        'name'=>$request->nom,
        'email'=>$request->email,
        'fonction'=>$request->fonction,
        'service'=>$request->service,
        'nom'=>$request->nom,
        'prenom'=>$request->prenom,
        'role'=>'user',
        'password'=>bcrypt($request->prenom),
           ]);
           return redirect()->route('users');
        }
      
}
