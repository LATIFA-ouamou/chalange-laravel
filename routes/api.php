<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


//  Route::get('/pos',[PostController::class,'index'])->name('home');
//  Route::post('/addForm',[PostController::class,'store'])->name('add');

// Route::get('/addForm', function () {
//    return view('add');
//  });



//  Route::get('/detail/{post}', [PostController::class, 'show'])->name('detail');



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::apiResource('profiles', ProfileController::class);


Route::post('/users', [UserController::class, 'store']);
Route::post('/profiles', [ProfileController::class, 'store']);
Route::get('/profiles', [ProfileController::class, 'index']);

Route::apiResource('users', UserController::class);
Route::apiResource('posts', PostController::class);