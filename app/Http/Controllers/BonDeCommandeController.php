<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fournisseur;
use App\User;
use App\Societe;
use App\BonDeCommande;
use App\Facture;
use App\Article;

class BonDeCommandeController extends Controller
{
    public function index()
    {
        $bons=BonDeCommande::where('archive',0)->get();
        return view('bon_de_commande.index',compact('bons'));
    }

    public function historique()
    {
        $bons=BonDeCommande::where('archive',1)->get();
        return view('bon_de_commande.corbeille',compact('bons'));
    }

    public function create()
    {
        $fournisseurs=Fournisseur::all();
        $societes=Societe::all();
        return view('bon_de_commande.create',array('fournisseurs'=>$fournisseurs,'societes'=>$societes));
    }
    public function store(Request $request){

        $facture=Facture::create([
            'numero'=>$request->num_facture,
            'date_emission'=>$request->date_emission,
            'date_validation'=>$request->date_validation
        ]);
        $bon=BonDeCommande::create([
              'numero'=> str_random(2) . time() ,
              'pour_compte'=>$request->pc,
              'devise'=>$request->devise,
              'societe_id'=>$request->societe,
              'facture_id'=>$facture->id,
              'fournisseur_id'=>$request->fournisseur,
              'precision'=>$request->precision
        ]);

        $size=(int)$request->size;
        for($i=1;$i<=$size;$i++){
            Article::create([
                'libelle'=>$request->input('lib_'.$i),
                'pu'=>$request->input('pu_'.$i),
                'qte'=>$request->input('qte_'.$i),
                'bon_de_commande_id'=>$bon->id,
                'ref'=>$request->input('ref_'.$i)
            ]);
        }

        return redirect()->route('bon.index');
    }
    public function delete($id){
        $bon= BonDeCommande::find($id);
       $bon->update(['archive'=>1,'date_suppression'=>new \Datetime()]);
        return back();
    }

    public function consulter($id){
        $bon= BonDeCommande::find($id);
        return view('bon_de_commande.details_bon',array('bon'=>$bon));
    }

}
