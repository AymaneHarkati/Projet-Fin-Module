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
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware'=>['auth']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')
    ->name('dashboard');
});
Route::get('/home', function(){
    return view('livewire.home');
})->name('home');


Route::get('dashboard/{id}/{tab}/{par3}/{par4}/{par5}/{par6}','App\Http\Livewire\Users@destroy')->name('user.destroy');
Route::get('dashboard/{id}/{nom}/{prenom}','App\Http\Livewire\Agriculteurs@delete')->name('agriculteur.destroy');
Route::get('dashboard/{id}/{nom}/{superficie}/{lieu}','App\Http\Livewire\Parcelles@delete')->name('parcelle.destroy');
Route::get('dashboard/{id}','App\Http\livewire\Tarifs@delete')->name('tarif.destroy');
Route::get('dashboard/{id}/{nom}/{prenom}/{tarif}/{tab}','App\Http\livewire\Employes@delete')->name('employe.destroy');
Route::get('dashboard/{id}/{id2}','App\Http\livewire\Interventions@delete')->name('intervention.destroy');



require __DIR__.'/auth.php';
