<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/', 'Shop\MainController@index')->name('accueil') ;
Route::get('/produit/{id} ' , 'Shop\MainController@produit')->name('voir_produit') ;
Route::get('/categorie/{id}' , 'Shop\MainController@viewByCategory')->name('voir_produit_par_cat') ;
Route::get('/tag/{id}' , 'Shop\MainController@viewByTag')->name('voir_produit_par_tag') ;
Route::get('/panier' , 'Shop\CartController@index' )->name('cart_index') ;
Route::post('/panier/add/{id}' , 'Shop\CartController@add' )->name('cart_add') ;


Route::group(['prefix' => 'backoff'], function () {
    Voyager::routes();
});
