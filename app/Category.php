<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Récupérer la catégorie parente d'une catégorie 'enfant' 
    public function parent(){
        return $this->belongsTo('App\Category' , 'parent_id') ;
    }

    // Récupérer les catégories enfants d'une catégorie
    public function childrens(){
        return $this->hasMany('App\Category' , 'parent_id') ;
    }

    // Récupérer les produits de la catégories >> OneToMany
    public function produitsParent(){
        return $this->hasMany('App\Produit') ;
    }

    // Récupérer des produits situés dans une catégorie 'enfant' au travers une catégorie parente 
    public function produitsChild(){ 
        return $this->hasManyThrough('App\Produit' , 'App\Category' , 'parent_id' , 'category_id') ;
    }

    public function produits(){
        $produits = $this->produitsParent()->with('category')->get()->merge($this->produitsChild()->with('category')->get() ) ;
        return $produits ;
    }
}
