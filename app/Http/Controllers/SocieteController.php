<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Societe;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class SocieteController extends Controller
{
    public function index()
    {
        $societes=Societe::all();
        return view('societe.index',compact('societes'));
    }

    public function create()
    {
        return view('societe.create');
    }

    public function store(Request $request){
        $file = $request->file('logo');
        $logo='';
		if($file!=null){
		 $extension = $file->getClientOriginalExtension();
        Storage::disk('logo')->put($file->getFilename().'.'.$extension,  File::get($file));
		$logo=$file->getFilename().'.'.$extension;
        }
     
        Societe::create([
            'nom'=>$request->nom,
            'adresse'=>$request->adresse,
            'ref_doc'=>$request->ref_doc,
            'ref_revision'=>$request->ref_revision,
            'ref_societe'=>$request->ref_societe,
            'logo'=>$logo
        ]);
        return redirect()->route('societe.index');
    }

    public function edit($id)
    {
        $societe=Societe::find($id);
        return view('societe.edit',compact('societe'));
    }
    public function update(Request $request,Societe $societe){

        $file = $request->file('logo');
        $logo='';
		if($file!=null){
		 $extension = $file->getClientOriginalExtension();
        Storage::disk('logo')->put($file->getFilename().'.'.$extension,  File::get($file));
		$logo=$file->getFilename().'.'.$extension;
        }
        $data=[
            'nom'=>$request->nom,
            'adresse'=>$request->adresse,     
            'ref_doc'=>$request->ref_doc,
            'ref_revision'=>$request->ref_revision,
            'ref_societe'=>$request->ref_societe,     
        ];
        if($logo!=''){
            $data['logo']=$logo;
        }
       
        $societe->update($data);
     
        return redirect()->route('societe.index');
    }

    public function delete($id){
        Societe::destroy($id);
        return redirect()->route('societe.index');
    }
 
}
