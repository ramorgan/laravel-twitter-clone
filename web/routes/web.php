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
    return view('welcome');
});




Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function (){
    Route::get('/tweets', 'App\Http\Controllers\TweetController@index')->name('home');
    Route::post('/tweets', 'App\Http\Controllers\TweetController@store');
});

Route::get('/u/{user:name}', 'App\Http\Controllers\ProfilesController@show')->name('profile');
