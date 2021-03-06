<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Example\FirstController;
use Illuminate\Http\Request;
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

//ROute::View('/about','about')->name('about.us');

// Route::get('/about', function (Request $request) {
    
//     //$token = $request->session()->token();
//     //$token = csrf_token();
//     //dd($token);
    
//     return view('about');
// });

//Route::get('/about','App\Http\Controllers\Example\FirstController@index')->name('about.us');


Route::get('/about',[FirstController::class,'about_index'])->name('about.us');

Route::post('/studenStore',[FirstController::class,'studenStore'])->name('student.store');

Route::post('/storeDetails',[FirstController::class,'storeDetails'])->name('store.named');


Route::get(md5('/contact'), function () {
    return view('contact');
})->name('contact.us');


Route::get('/country', function () {
    return view('country');
})->middleware('country');



Route::get('/showName',[FirstController::class,'showName'])->name('show.name');

Route::get('/test', function () {
    app()->make("kl");
});


Route::get('/all', function (Request $request) {
    $data = $request->session()->all();
    
    dd($data);
});


Route::get('/testa', function () {
    ert::checksum();
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
