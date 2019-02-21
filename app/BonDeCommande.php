<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BonDeCommande extends BaseModel
{ 
    public function facture() {
        return $this->belongsTo(Facture::class);
    }
    public function fournisseur() {
        return $this->belongsTo(Fournisseur::class);
    }
    public function societe() {
        return $this->belongsTo(Societe::class);
    }
    public function articles() {
        return $this->hasMany(Article::class);
    }
}
