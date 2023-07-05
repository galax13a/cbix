<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\LanguageSwitcher;
use App\Http\Livewire\ChaturbateController; // Agregar esta línea
use Spatie\Permission\Models\Role;
use App\Http\Livewire\Apps;
use App\Http\Livewire\Apps_install;

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

Route::view('supports', 'livewire.supports.index')->middleware('auth')->name('supports');

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

Route::view('admin/apps/root/create', 'livewire.appeditors.index')->middleware('auth')->name('create.root.app');


// rutas de bans
Route::view('ban', 'ban');
Route::get('unban-expired', 'BanController@unbanExpired')->middleware('auth', 'can:manage-bans')->name('unban-expired');
Route::view('/unban-request', 'livewire.unbans.index')->middleware('auth')->name('unban.request');

// termina bans..

Route::get('/debug', function () {
    $role = Role::findByName('admin');
    $permissions = $role->permissions;
    return response()->json($permissions);
    //$role = Role::findByName('root');        
    //dd($role->hasPermissionTo('admin.unbans')); // Debería imprimir "true" si el rol tiene el permiso
});


Route::middleware(['auth', 'checkbanned'])->group(function () {


    Route::view('root/dashboard', 'livewire.admin.dashboard.index')
        ->middleware('can:root.dashboard')->name('root.dashboard');


    Route::view('root/dashboard/users', 'livewire.usuarios.index')
        ->middleware('can:root.dashboard.users')->name('root.users');

    Route::view('admin/unbans', 'livewire.admin.dashboard.unbans.index')
        ->middleware('can:admin.unbans')->name('admin.unbans');

    Route::view('admin/supports', 'livewire.admin.dashboard.supports_admin.index')
        ->middleware('can:admin.supports')->name('admin.supports');

    // router Apps
    Route::view('admin/apps', 'livewire.apps.index')
    ->middleware('can:admin.apps')->name('admin.apps');

    Route::view('apps0categors', 'livewire.apps0categors.index')->middleware('auth');

    Route::view('admin/tasks', 'livewire.tasks.index')
        ->middleware('can:admin.tasks')->name('admin.tasks');

    Route::view('admin/stats', 'livewire.admin.stats.index')
        ->middleware('can:admin.stats')->name('admin.stats');

    Route::view('admin/users', 'livewire.usuarios.index')
        ->middleware('can:admin.users')->name('admin.users');

    Route::view('admin/roles', 'livewire.roles.index')
        ->middleware('can:admin.roles')->name('admin.roles');

    Route::view('admin/gifts', 'livewire.gifts.index')
        ->middleware('can:admin.gifts')->name('admin.gifts');

    Route::view('admin/apps0tags', 'livewire.apps0tags.index')
        ->middleware('can:admin.apps0tags')->name('admin.apps0tags');

    Route::view('admin/credits-goals', 'livewire.credits_goals.index')
        ->middleware('can:admin.credits_goals')->name('admin.credits_goals');
});


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
