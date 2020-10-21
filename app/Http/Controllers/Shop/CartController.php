<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;
use App\Produit;

class CartController extends Controller
{
    //  Ajouter un produit au panier 
    public function add(Request $request){
        $produit = Produit::find($request->id) ;

        Cart::add(array(
            'id' => $produit->id, // inique row ID 
            'name' => $produit->nom,
            'price' => $produit->prix_ht,
            'quantity' => $request->qty,
            'attributes' => array('size' => $request->size , 'prix_ttc' => $produit->prixTTC() , 'photo' => $produit->photo_principale)
        ));

        return redirect( route('cart_index') ) ;
    }

    public function index(){
        $content = Cart::getContent() ;
        $total_ttc_panier = Cart::getTotal() ;

        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'VAT 20%',
            'type' => 'tax',
            'target' => 'subtotal', // this condition will be applied to cart's subtotal when getSubTotal() is called.
            'value' => '20%'
            )
        );
        
        Cart::condition($condition);

        return view('cart.index' , compact('content' , 'total_ttc_panier')) ;
    }
}
