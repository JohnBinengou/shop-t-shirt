<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Produit;
use App\Category;
use App\Tag ;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $produits = Produit::with('category')->latest()->paginate(6) ;
        //dd($produits) ;

        return view('shop.index' , compact('produits')) ;
    }

    public function produit(Request $request) {
        $produit = Produit::find($request->id) ;

        return view('shop.produit' , compact('produit')) ;
    }

    public function viewByCategory(Request $request) {
        //$categories = Category::where('is_online' , 1)->get() ; 

        //$produits = Produit::where('category_id' , $request->id)->get() ;

        $category = Category::find($request->id) ;

        $produits = $category->produits() ;

        return view('shop.categorie' , compact('produits' , 'category')) ;
    }

    public function viewByTag(Request $request){
        $tag = Tag::find($request->id) ;
        $produits = $tag->produits ;
        return view('shop.categorie' , compact('produits' , 'tag')) ;
    }
}
