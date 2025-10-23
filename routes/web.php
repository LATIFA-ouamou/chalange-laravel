<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\TestController;
use App\Http\Controllers\TodoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// // Route::get('/Accueil', function () {
// //     return view('Accueil');

// // });

// Route::get('/Accueil/{nom?}', function ($nom) {
//     return $nom ;

// });

// Route::get('/test',[TestController::class,'indix']);
// Route::get('/Accueil',[TestController::class,'show'])->name('home');

// Route::get('/test/{prenom}/{age}',[TestController::class,'greet']);
// Route::get('/article/{id}',[TestController::class,'showArticle']);








// Route::get('/', function () {
//    return view('Todo');

// });
Route::get('/',[TodoController::class,'indix']);
Route::post('/add',[TodoController::class,'add']);