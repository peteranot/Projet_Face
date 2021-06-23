<?php

use Illuminate\Support\Facades\Route;
use App\User; //Importer la class contacts
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

Auth::routes();

Route::get('/', function (User $listUsers) {


  // requeter qui récupère toutes les donnéés
  // dans la table contacts
  $listUsers = $listUsers->all();

	$etat = 'fermer';
	$id_user = '';
	//back index
	return view('welcome',compact('listUsers','etat','id_user'));
});





Route::get('/home', 'HomeController@index')->name('home');
Route::get('/recrutement', 'HomeController@indexRecrutement');



// Create new user
Route::post('/create_user', 'HomeController@createUser');

Route::post('/form_user', 'HomeController@formupdateUser');

// delete user
Route::post('/delete_user', 'HomeController@deleteUser');
// update user
Route::post('/update_user', 'HomeController@updateUser');



// Create new jobseeker
Route::post('/create_jobseeker', 'JobseekerController@create');
// Delete jobseeker
Route::post('/delete_jobseeker', 'JobseekerController@deleteJobseeker');
// update jobseeker
Route::post('/form_jobseeker', 'JobseekerController@formupdateJobseeker');
Route::post('/update_jobseeker', 'JobseekerController@updateJobseeker');