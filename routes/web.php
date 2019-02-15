<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', 'FrontController@index');


Route::get('product/{id}', 'FrontController@show')->where(['id' => '[0-9]+']);
Route::get('category/{id}', 'FrontController@showProductByCategory')->where(['id' => '[0-9]+']);

Route::get('solde', 'FrontController@showBySolde')->where(['code' => 'solde']);

Route::get('category/{id}', 'FrontController@byCategory')->where(['id'=>'[0-9]+']);

Route::get('accueil', 'FrontController@index')->where(['id'=>'[0-9]+']);

Route::resource('admin', 'ProductController')->middleware('auth');
// Page dashboard
Auth::routes(); // routes pour le login Laravel avec la commande php artisan make:auth
Route::resource('/admin', 'ProductController')->name('get','admin')->middleware('auth');


/*

    return "Je suis un test";
});

Route::get('products', function(){
    return App\product::all();

});     

Route::get('product/{id}', function($id){

    return App\product::find($id);

});


Route::get('category/{word?}', function(string $word = null){


});

Route::get('user/{name}/{id}', function(string $name, int $id){

})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


//Route::get('product/id', 'FrontController@index');





Route::get('categorie/id', 'FrontController@index');

Route::get('solde/id', 'FrontController@productByCategorie');

*/

