<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    private static $facteur_tva = 1.2 ;

    public function category(){
        return $this->belongsTo('App\Category') ; 
    }

    public function tags(){
        return $this->belongsToMany('App\Tag') ;
    }

    public function recommandations(){
        return $this->belongsToMany('App\Produit' , 'produit_recommande' , 'produit_id' , 'produit_recommande_id') ;
    }

    public function prixTTC() {
        $prix_ttc = $this->prix_ht * Self::$facteur_tva ;
        return $prix_ttc ;
    }
}
