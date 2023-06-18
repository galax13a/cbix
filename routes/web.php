<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\LanguageSwitcher;
use App\Http\Livewire\ChaturbateController; // Agregar esta línea
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
Route::get('chaturbate/{chaturbateId}/{username}', 'App\Http\Controllers\ChaturbateController@profile')->name('chaturbate');


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
	Route::view('admin/gifts', 'livewire.gifts.index')->middleware('auth')->name('admin.gifts');
	Route::view('apps0tags', 'livewire.apps0tags.index')->middleware('auth');
	Route::view('admin/credits-goals', 'livewire.credits_goals.index')->middleware('auth')->name('admin.credits_goals');
	Route::view('admin/apps', 'livewire.apps.index')->middleware('auth')->name('admin.apps');
	Route::view('admin/supports', 'livewire.supports.index')->middleware('auth')->name('admin.supports');
	Route::view('admin/tasks', 'livewire.tasks.index')->middleware('auth')->name('admin.tasks');
	Route::view('admin/stats', 'livewire.stats.index')->middleware('auth')->name('admin.stats');
    Route::view('admin/users', 'livewire.usuarios.index')->middleware('auth')->name('usuarios');
    Route::view('admin/roles', 'livewire.roles.index')->middleware('auth')->name('admin.roles');
    
    Route::view('apionechaturs', 'livewire.apionechaturs.index')->middleware('auth');
    Route::view('estudiomodelos', 'livewire.estudiomodelos.index')->middleware('auth');
    Route::view('estudio_modelos', 'livewire.estudio_modelos.index')->middleware('auth');
    Route::view('typemodelos', 'livewire.typemodelos.index')->middleware('auth');
    Route::view('apichaturs', 'livewire.apichaturs.index')->middleware('auth');
    Route::view('modelos', 'livewire.modelos.index')->middleware('auth');
    Route::view('admin/apps/estudios', 'livewire.admin.apps.estudios.index')->middleware('auth');
    Route::view('pagemasters', 'livewire.pagemasters.index')->middleware('auth');
    Route::view('categors', 'livewire.categors.index')->middleware('auth');

    Route::view('pages', 'livewire.pages.index')->middleware('auth');
    Route::view('root/dashboard', 'livewire.admin.dashboard.index')->middleware('auth');