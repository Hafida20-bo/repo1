<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\LettreController;
use App\Http\Controllers\CertificatController;
use App\Http\Controllers\RdvController;
use App\Http\Controllers\CrudsController;
use App\Http\Controllers\ImageGalleryController;
use App\Http\Controllers\PerscriptionController;
use App\Http\Controllers\LigneController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\RdvChartController;
use App\Http\Controllers\PerscriptionChartController;
use App\Http\Controllers\DocChartController;
//use App\Http\Controllers\SecretaireController;
/*|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('statics',[RdvChartController::class, 'index']);
//Route::resource('imageupload', \App\Http\Controllers\ImageUploadController::class);
//Route::get('Pbar-chart',[PerscriptionChartController::class, 'index']);

//Route::get('google-pie-chart',[DocChartController::class, 'index']);
//Route::get('/update', [PatientController::class, 'edit']);
//Route::get('crud/{id}', [App\Http\Controllers\CrudsController::class, 'test']);
//Route::get('/create', [App\Http\Controllers\PatientController::class, 'create']);



Route::get('/', function () {return view('welcome');});
Route::get('/logout', function(){Auth::logout();return Redirect::to('login');});
Route::get('/admin', function () {return view('admin.admin');});
Route::get('/secretaire', function () {return view('secretaire.secretaire');});
Route::get('/medecin', function () {return view('medecin.medecin');});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('certificats', \App\Http\Controllers\CertificatController::class);
Route::resource('patients', \App\Http\Controllers\PatientController::class);
Route::resource('perscriptions', \App\Http\Controllers\PerscriptionController::class);

Route::resource('users', \App\Http\Controllers\UtilisateurController::class);
Route::resource('lettres', \App\Http\Controllers\LettreController::class);
Route::resource('lignes', \App\Http\Controllers\LigneController::class);
Route::resource('rdvs', \App\Http\Controllers\RdvController::class);
Route::resource('statics',\App\Http\Controllers\RdvChartController::class);
Route::resource('crud', \App\Http\Controllers\CrudsController::class);

