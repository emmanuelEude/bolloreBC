<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fournisseur;

class FournisseurController extends Controller
{
    public function index()
    {
        $fournsseurs=Fournisseur::all();
        return view('fournisseur.index',compact('fournsseurs'));
    }
    public function create()
    {
        return view('fournisseur.create');
    }

    public function store(Request $request){
        Fournisseur::create([
            'societe_frs'=>$request->societe_frs,
            'adresse_frs'=>$request->adresse_frs,
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'contact'=>$request->contact,
        ]);
        return redirect()->route('fournisseur.index');
    }

    public function edit($id)
    {
        $fournisseur=Fournisseur::find($id);
        return view('fournisseur.edit',compact('fournisseur'));
    }
    public function update(Request $request,Fournisseur $fournisseur){
        $fournisseur->update([
            'societe_frs'=>$request->societe_frs,
            'adresse_frs'=>$request->adresse_frs,
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'contact'=>$request->contact,
        ]);
        return redirect()->route('fournisseur.index');
    }

    public function delete($id){
        Fournisseur::destroy($id);
        return redirect()->route('fournisseur.index');
    }
}
