<?php

use Illuminate\Database\Seeder;
use App\Category ;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $category = new Category() ;
        // $category->nom = "Films" ;
        // $category->is_online = 1 ;
        // $category->save() ;

        // $category2 = new Category() ;
        // $category2->nom = "Séries TV" ;
        // $category2->is_online = 1 ;
        // $category2->save() ;

        // $category3 = new Category() ;
        // $category3->nom = "Musique" ;
        // $category3->is_online = 1 ;
        // $category3->save() ;

        // $category4 = new Category() ;
        // $category4->nom = "Jeux-Vidéos" ;
        // $category4->is_online = 1 ;
        // $category4->save() ;

        // $category5 = new Category() ;
        // $category5->nom = "Sport" ;
        // $category5->is_online = 1 ;
        // $category5->save() ;

        // $category6 = new Category() ;
        // $category6->nom = "Dessins-Animés" ;
        // $category6->is_online = 1 ;
        // $category6->save() ;

        $category7 = new Category() ;
        $category7->nom = "Les goonies" ;
        $category7->is_online = 1 ;
        $category7->parent_id = 1 ;
        $category7->save() ;

        $category8 = new Category() ;
        $category8->nom = "Star Wars" ;
        $category8->is_online = 1 ;
        $category8->parent_id = 1 ;
        $category8->save() ;

        $category9 = new Category() ;
        $category9->nom = "Star Trek" ;
        $category9->is_online = 1 ;
        $category9->parent_id = 1 ;
        $category9->save() ;

        $category10 = new Category() ;
        $category10->nom = "Superman" ;
        $category10->is_online = 1 ;
        $category10->parent_id = 1 ;
        $category10->save() ;

        $category11 = new Category() ;
        $category11->nom = "Tomb Raider" ;
        $category11->is_online = 1 ;
        $category11->parent_id = 4 ;
        $category11->save() ;

        $category12 = new Category() ;
        $category12->nom = "Resident Evil" ;
        $category12->is_online = 1 ;
        $category12->parent_id = 4 ;
        $category12->save() ;

        $category13 = new Category() ;
        $category13->nom = "Call of Duty" ;
        $category13->is_online = 1 ;
        $category13->parent_id = 4 ;
        $category13->save() ;

        $category14 = new Category() ;
        $category14->nom = "FIFA" ;
        $category14->is_online = 1 ;
        $category14->parent_id = 4 ;
        $category14->save() ; 

        $category15 = new Category() ;
        $category15->nom = "GTA" ;
        $category15->is_online = 1 ;
        $category15->parent_id = 4 ;
        $category15->save() ;
    }
}
