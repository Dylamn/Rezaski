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

// Default homepage
Route::get('/', function () {
    return view('welcome');
})->name('acceuil');

/*
 |--------------------------------------------------------------------------
 | Equipements Routes
 |--------------------------------------------------------------------------
 */

Route::get('/equipements', 'EquipmentController@index')->name('equipements.index');
Route::post('/equipements', 'EquipmentController@store')->name('equipements.store');
Route::get('/equipements/creer', 'EquipmentController@create')->name('equipements.create');
Route::get('/equipements/{equipement}', 'EquipmentController@show')->name('equipements.show');
Route::get('/equipements/{equipement}/modifier', 'EquipmentController@edit')->name('equipements.edit');
Route::patch('/equipements/{equipement}/', 'EquipmentController@update')->name('equipements.update');
Route::delete('/equipements/{equipement}', 'EquipmentController@destroy')->name('equipements.destroy');

// Routes for authentification (register page is disabled)
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

/*
 |--------------------------------------------------------------------------
 | Reservations Routes
 |--------------------------------------------------------------------------
 */
Route::resource('reserver', 'ReserverController');

/*
 |--------------------------------------------------------------------------
 | Categorie Routes
 |--------------------------------------------------------------------------
 */

Route::get('/categories', 'CategorieController@index')->name('categorie.index');
Route::post('/categories', 'CategorieController@store')->name('categorie.store');
Route::get('/categories/creer', 'CategorieController@create')->name('categorie.create');
Route::get('/categories/{categorie}/modifier', 'CategorieController@edit')->name('categorie.edit');
Route::patch('/categories/{categorie}/', 'CategorieController@update')->name('categorie.update');

/*
 |--------------------------------------------------------------------------
 | Utilisateurs Routes
 |--------------------------------------------------------------------------
 */
Route::get('/utilisateurs', 'UserController@index')->name('utilisateurs.index');
Route::post('/utilisateurs', 'UserController@store')->name('utilisateurs.store');
Route::get('/utilisateurs/creer', 'UserController@create')->name('utilisateurs.create');
Route::get('/utilisateurs/{utilisateur}', 'UserController@show')->name('utilisateurs.show');
Route::get('/utilisateurs/{utilisateur}/modifier', 'UserController@edit')->name('utilisateurs.edit');
Route::patch('/utilisateurs/{utilisateur}/', 'UserController@update')->name('utilisateurs.update');
Route::delete('/utilisateurs/{utilisateur}', 'UserController@destroy')->name('utilisateurs.destroy');
