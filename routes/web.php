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

Route::group(
    
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
  function() {
    Route::get('/', function () {
        // App::setLocale('ar');
        // app()->setLocale('ar');
        // Auth::loginUsingId(1);
        // Auth::logout();
        // return Auth::user();
        // return app()->getLocale();
        // return Uuid::generate()->string;
        return view('livewire');
        return view('welcome');
    });


    Route::get('/andrew', function () {
        return view('welcome');
    });

    Route::get('/main', function () {
        return view('welcome');
    });


});

// Route::get('/', function () {
//     // app()->setLocale('ar');
//     return app()->getLocale();
//     return view('welcome');
// });

// Route::get('/andrew', function () {
//     return view('welcome');
// });

// Route::get('/main', function () {
//     return view('welcome');
// });
