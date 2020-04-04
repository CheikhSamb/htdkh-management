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
    return view('accueil');
});
//Route::get('test', function() {return view('secteur');});
/*
Route::get('user/profile', [
'as' => 'profile', 'uses' => 'UserController@showProfile'
]);
*/
Route::get('secteur','SecteurController@index');
Route::get('new-secteur','SecteurController@create');
Route::get('new-member','MemberController@create');
Route::post('create-secteur','SecteurController@createSecteur');
Route::get('liste-membre','MemberController@liste');
Route::post('newInscription','MemberController@addMember');
Route::post('edit-member','MemberController@edit_member');
Route::get('dossier-membre/{id}','MemberController@dossierMembre');
Route::get('secteurMember/{id}','SecteurController@showSecteurMembers');
Route::get('secteurMember/add-member-secteur/{id}','SecteurController@addSecteurMembers');
Route::post('secteurMember/add-member-secteur/add-secteur-member','SecteurController@addMembers');
Route::get('archiver-membre/{id}', 'MemberController@archiver');
Route::get('archive', 'MemberController@show_archive');
Route::get('restore-membre/{id}', 'MemberController@restore_member');

/*Route::get('secteurMember/id', ['as' => 'membreSecteur', 'uses' => 'SecteurController@showSecteurMembers']);*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('mensualite', 'SecteurController@listeMensualite');
Route::get('create-mensualite', 'SecteurController@createMensualite');
Route::get('voir-cotisation/{id}','SecteurController@showCotisation');
