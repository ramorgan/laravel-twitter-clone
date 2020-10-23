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
Route::middleware('auth')->group(function () {
    Route::get('/tweets', 'App\Http\Controllers\TweetController@index')->name('home');
    Route::post('/tweets', 'App\Http\Controllers\TweetController@store');
    Route::post('/u/{user:username}/follow', 'App\Http\Controllers\FollowsController@store');
    Route::get('/u/{user:username}/edit',
        'App\Http\Controllers\ProfilesController@edit')
        ->middleware('can:edit,user');

    Route::patch('/u/{user:username}', 'App\Http\Controllers\ProfilesController@update');
});

Route::get('/u/{user:username}', 'App\Http\Controllers\ProfilesController@show')->name('profile');
//Route::get('/u/{user:name}', 'App\Http\Controllers\ProfilesController@show')->name('profile');
