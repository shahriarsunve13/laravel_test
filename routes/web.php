<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create somepthing great!
|
*/

Route::get('/', function () {
    //dd(app());
    return view('welcome');
});

ROute::View('/about','about')->name('about.us');


Route::get(md5('/contact'), function () {
    return view('contact');
})->name('contact.us');


Route::get('/country', function () {
    return view('country');
})->middleware('country');


Route::get('/test', function () {
    app()->make("kl");
});

Route::get('/testa', function () {
    ert::checksum();
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
