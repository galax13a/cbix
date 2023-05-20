<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\LanguageSwitcher;

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

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth'])->group(function () { // url auth admin


    Route::get('/admin/cb', function () {
        return view('admin.chaturbate');
    });    
      // Ruta /api
      Route::get('/admin/api', function () {
        return view('api.index');
    });   

});

Route::get('/test-speed', function () { // test speed
    return view('testspeed');
});

Route::get('/home', function () { // test speed
    return view('home');
});
Route::get('/cbhrs', function () { // test speed
    return view('cbhrs');
});


Auth::routes();

Route::get('/es', function () {
    session(['locale' => 'es']);
    return redirect()->back();
})->name('language.switch.es');

Route::get('/en', function () {
    session(['locale' => 'en']);
    return redirect()->back();
})->name('language.switch.en');


//Route Hooks - Do not delete//
	Route::view('apichaturs', 'livewire.apichaturs.index')->middleware('auth');
	Route::view('admin/pages', 'livewire.pages.index')->middleware('auth');
    Route::view('apichaturs', 'livewire.apichaturs.index')->middleware('auth');