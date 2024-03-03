<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/user/{name?}', function ($name='John') {
    return 'My name is '.$name;
});

Route::get('/hello',[WelcomeController::class,'hello']);

Route::get ('/',[PageController::class,'index']);

Route::get('/about',[PageController::class,'about']);

Route::get('/articles/{id?}',[PageController::class,'articles']);

Route::get('/home',[HomeController::class,'index']);

Route::resource('photos',PhotoController::class);

Route::resource('photos',PhotoController::class)->only(['index','show']);

Route::resource('photos',PhotoController::class)->except(['create','store','update','destroy']);

Route::get('/greeting',[WelcomeController::class,'greeting']);
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


