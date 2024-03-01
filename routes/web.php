<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


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

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/apropos', [PagesController::class, 'apropos'])->name('apropos');
Route::get('/services', [PagesController::class, 'services'])->name('services');


// Route::get('/', 'PagesController@home')->name('home');
// Route::get('/apropos', 'PagesController@apropos')->name('apropos');
// Route::get('/services', 'PagesController@services')->name('services');

// Route::get('/', [PagesController::class, 'home']);
// Route::get('/pages', [PagesController::class, 'home'])->name('home');

// Route::get('/pages', [PagesController::class, 'apropos']);
// Route::get('/pages', [PagesController::class, 'services']);

// Route::get('/', 'PagesController@home');

// Route::get('/apropos', function () {
//     return view('pages.apropos');
// })->name('apropos');

// Route::get('/services', function () {
//     return view('pages.services');
// })->name('services');


// Route::get('/', function () {
//     return view('pages.home');
//     // return '<h1><u>Bonjour JLQ</u></h1>';
// });

// Route::get('/apropos', function () {
//     return view('pages.apropos');
//     // return '<h1><u>Bienvenue sur la page A PROPOS</u></h1>';
// });
// Route::get('/services', function () {
//     return view('pages.services');
//     // return '<h1><u>Bienvenue sur la page CONTACT</u></h1>';
// });
// Route::get('/home', function ($noms,$id) {
//     // return view('welcome');
//     return '<h1><u>Bienvenue sur la page SERVICE Monsieur  '.$noms. '  avec le id '.$id.'</u></h1>';

// });