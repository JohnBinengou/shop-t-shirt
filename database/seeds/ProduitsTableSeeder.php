<?php

use App\Produit;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produit1 = new Produit() ;
        $produit1->nom = "nom du t-shirt" ;
        $produit1->prix_ht = "4000" ;
        $produit1->description = "description du t-shirt" ;
        $produit1->photo_principale = "goonies.jpg" ;
        $produit1->category_id = 1 ;
        $produit1->save() ;

        $produit2 = new Produit() ;
        $produit2->nom = "nom du t-shirt" ;
        $produit2->prix_ht = "5000" ;
        $produit2->description = "description du t-shirt" ;
        $produit2->photo_principale = "happy.jpg" ;
        $produit2->category_id = 6 ;
        $produit2->save() ;

        $produit3 = new Produit() ;
        $produit3->nom = "nom du t-shirt" ;
        $produit3->prix_ht = "3000" ;
        $produit3->description = "description du t-shirt" ;
        $produit3->photo_principale = "hulk.jpg" ;
        $produit3->category_id = 6 ;
        $produit3->save() ;

        $produit4 = new Produit() ;
        $produit4->nom = "nom du t-shirt" ;
        $produit4->prix_ht = "5000" ;
        $produit4->description = "description du t-shirt" ;
        $produit4->photo_principale = "krusty_simpsons.jpg" ;
        $produit4->category_id = 6 ;
        $produit4->save() ;

        $produit5 = new Produit() ;
        $produit5->nom = "nom du t-shirt" ;
        $produit5->prix_ht = "5000" ;
        $produit5->description = "description du t-shirt" ;
        $produit5->photo_principale = "little_miss_sunshine.jpg" ;
        $produit5->category_id = 2 ;
        $produit5->save() ;

        $produit6 = new Produit() ;
        $produit6->nom = "nom du t-shirt" ;
        $produit6->prix_ht = "5000" ;
        $produit6->description = "description du t-shirt" ;
        $produit6->photo_principale = "simpsons.jpg" ;
        $produit6->category_id = 2 ;
        $produit6->save() ;

        $produit7 = new Produit() ;
        $produit7->nom = "nom du t-shirt" ;
        $produit7->prix_ht = "5000" ;
        $produit7->description = "description du t-shirt" ;
        $produit7->photo_principale = "star_trek_kirk.jpg" ;
        $produit7->category_id = 2 ;
        $produit7->save() ;

        $produit8 = new Produit() ;
        $produit8->nom = "nom du t-shirt" ;
        $produit8->prix_ht = "5000" ;
        $produit8->description = "description du t-shirt" ;
        $produit8->photo_principale = "super_man.jpg" ;
        $produit8->category_id = 5 ;
        $produit8->save() ;

        $produit9 = new Produit() ;
        $produit9->nom = "nom du t-shirt" ;
        $produit9->prix_ht = "5000" ;
        $produit9->description = "description du t-shirt" ;
        $produit9->photo_principale = "wonder_woman.jpg" ;
        $produit9->category_id = 1 ;
        $produit9->save() ;
    }
}
