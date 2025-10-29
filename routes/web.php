<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\TestController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
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
// Route::get('/',[TodoController::class,'indix']);
// Route::post('/add',[TodoController::class,'add']);


Route::get('/',[PostController::class,'index'])->name('home');
Route::post('/addForm',[PostController::class,'store'])->name('add');

Route::get('/addForm', function () {
   return view('add');
 });



 Route::get('/detail/{post}', [PostController::class,'show'])->name('detail');
 Route::get('/update/{post}', [PostController::class,'update'])->name('update');
Route::get('/update/{post}/edit', [PostController::class,'edit'])->name('update');








Route::get('/register', function () {
    return view('register');
  });
  
Route::get('/register', [RegisterController::class, 'showForm'])->name('register.show');
Route::post('/register/submit', [RegisterController::class, 'handleForm'])->name('register.submit');