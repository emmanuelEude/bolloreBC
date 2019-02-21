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

Route::get('/', 'Auth\LoginController@showLoginForm' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//route fournisseur
Route::get('/fournisseurs', 'FournisseurController@index')->middleware('auth')->name('fournisseur.index');
Route::get('/fournisseur/create', 'FournisseurController@create')->middleware('auth')->name('fournisseur.create');
Route::post('/fournisseur/store', 'FournisseurController@store')->middleware('auth')->name('fournisseur.store');
Route::get('/fournisseur/{fournisseur}/edit', 'FournisseurController@edit')->middleware('auth')->name('fournisseur.edit');
Route::post('/fournisseur/{fournisseur}/update', 'FournisseurController@update')->middleware('auth')->name('fournisseur.update');
Route::get('/fournisseur/{fournisseur}/delete', 'FournisseurController@delete')->middleware('auth')->name('fournisseur.delete');


//route societe
Route::get('/societes', 'SocieteController@index')->middleware('auth')->name('societe.index');
Route::get('/societe/create', 'SocieteController@create')->middleware('auth')->name('societe.create');
Route::post('/societe/store', 'SocieteController@store')->middleware('auth')->name('societe.store');
Route::get('/societe/{societe}/edit', 'SocieteController@edit')->middleware('auth')->name('societe.edit');
Route::post('/societe/{societe}/update', 'SocieteController@update')->middleware('auth')->name('societe.update');
Route::get('/societe/{societe}/delete', 'SocieteController@delete')->middleware('auth')->name('societe.delete');


//route bons de commande
Route::get('/bons', 'BonDeCommandeController@index')->middleware('auth')->name('bon.index');
Route::get('/bon/create', 'BonDeCommandeController@create')->middleware('auth')->name('bon.create');
Route::get('/bon/delete/{id}', 'BonDeCommandeController@delete')->middleware('auth')->name('bon.remove');
Route::post('/bon/store', 'BonDeCommandeController@store')->middleware('auth')->name('bon.store');
Route::get('/bon/consulter/{id}', 'BonDeCommandeController@consulter')->middleware('auth')->name('bon.consulter');


//user

Route::get('/users', 'UserController@index')->middleware('auth')->name('users');
Route::get('/user/create', 'UserController@create')->middleware('auth')->name('user.create');
Route::post('/user/store', 'UserController@store')->middleware('auth')->name('user.store');

Route::get('/profil/', 'UserController@profil')->middleware('auth')->name('profil.show');
Route::get('/account/', 'UserController@account')->middleware('auth')->name('account.show');
Route::post('/profil/update', 'UserController@profil_update')->middleware('auth')->name('profil.update');
Route::get('/historique', 'BonDeCommandeController@historique')->middleware('auth')->name('historique');