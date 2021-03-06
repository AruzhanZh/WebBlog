<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\App;

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

Route::get('/home', [MainController::class,'home'])->name('home');

Route::get('/about', [MainController::class,'about'])->name('about');

Route::get('/contact', [MainController::class,'contact']) ->name('contact');

Route::post('/contact/check', [MainController::class,'contact_check']);

Route::get('/home/{lang}', function ($lang){
    App::setlocale($lang);
    return view('home');
});

Route::get('mail/send', 'MailController@send');
