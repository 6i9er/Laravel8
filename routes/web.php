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
    /** Workign with livewire */
    Route::get('/', \App\Http\Livewire\Home::class)->name('home');

    Route::group(['middleware'=>'guest'] , function(){
        Route::get('/login', \App\Http\Livewire\Login::class)->name('login');
       Route::get('/register', \App\Http\Livewire\Register::class);
    });
    
    Route::get('/logout', \App\Http\Livewire\Logout::class);
    // Route::get('/comments', \App\Http\Livewire\Comments::class);
    
    /** End working with livewire */




    // Route::get('/', function () {
    //     return view('livewire' );
    //     return view('welcome');
    // });


    Route::get('/andrew', function () {
        return view('welcome');
    });

    Route::get('/main', function () {
        return view('welcome');
    });


});
