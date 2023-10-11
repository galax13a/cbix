<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Http\Controllers\EditorjsController;
use Illuminate\Http\Request;

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
Route::get('/export/{tabledata}', 'App\Http\Controllers\ExportTableController@exportTable')->name('export')->middleware('auth');

//Route::get('/export/favorites', 'ExportTableController@exportTable')->name('export.favorites');

Route::get('/google-auth/redirect', function () {
  
    return Socialite::driver('google')->redirect();
});
 
Route::get('/google-auth/callback', function () {
    $user_google = Socialite::driver('google')->stateless()->user();

    $user = User::updateOrCreate([
            'google_id' => $user_google->id,
        ], [
            'name' => $user_google->name,
            'email' => $user_google->email,          
        ]); 
        Auth::login($user); 
        return redirect('/app');
});

/*
Route::get('/', function () {
    return view('welcome');
});
*/

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
Route::post('/chatur/profile/api', 'App\Http\Controllers\ChaturbateController@profile_api'); //editor api profile cb api

Route::post('/chatur/lists/models10', 'App\Http\Controllers\ChaturbateController@listmodelschatur'); //editor api listados cb api

Route::get('/upgrade-plan', [UpgradePlanController::class, 'index'])->name('upgrade-plan');

Route::post('/editorjs/uploadcrop', [App\Http\Controllers\EditorjsController::class, 'uploadCrop']);

Route::post('/editorjs/creditoruploadimagen', [App\Http\Controllers\EditorjsController::class, 'creditoruploadimagen']);

Route::post('/getpage-editor', [App\Http\Controllers\EditorjsController::class, 'GetUrlDom']);
Route::post('/getchatur', [App\Http\Controllers\EditorjsController::class, 'getchaturdom']);
Route::post('/loadiframe', [\App\Http\Controllers\EditorjsController::class, 'loadIframe']);
Route::post('/get-ai-free', [\App\Http\Controllers\EditorjsController::class, 'getAIFree']);
Route::post('/get-ai-pro', [\App\Http\Controllers\EditorjsController::class, 'getAIPro']);

Route::any('/themas/components', [\App\Http\Controllers\ThemacomponentsController::class, 'createthemacom']);


Route::get('/app/test-speed', function () { // test speed
    return view('testspeed');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
    //    return view('livewire.admins.index');
        return  redirect('/app');
    });
});

Route::get('/cbhrs', function () { // test speed
    return view('cbhrs');
});

Route::view('admin/supports', 'livewire.admin.dashboard.supports_admin.index')
->middleware('can:admin.supports')->name('admin.supports');
Route::view('app/support', 'livewire.appsupports.index')->middleware('auth')->name('supports');

Auth::routes();

Route::get('/locate/es', function () {
    session(['locale' => 'es']);
    return redirect()->back();
})->name('language.switch.es');

Route::get('/locate/en', function () {
    session(['locale' => 'en']);
    return redirect()->back();
})->name('language.switch.en');


//Route Hooks - Do not delete//
	Route::view('admin/adminpremiums', 'livewire.admin.adminpremiums.index')->middleware('auth');
	Route::view('admin/adminsettings', 'livewire.admin.adminsettings.index')->middleware('auth');
	Route::view('app/settings', 'livewire.admin.adminsettings.index')->middleware('auth');
	
	Route::view('app/favorites', 'livewire.admin.favorites.index')->middleware('auth');
    Route::view('app/supports', 'livewire.admin.favorites.index')->middleware('auth');
	
	Route::view('app/contacts', 'livewire.admin.contacts.index')->middleware('auth');
	Route::view('admin/contacttags', 'livewire.admin.contacttags.index')->middleware('auth');
	
    Route::view('app/guests', 'livewire.adminguests.index')->middleware('auth');
	Route::view('app/canva', 'livewire.admincanvas.index')->middleware('auth');
	Route::view('apps/chaturbate', 'livewire.adminapps.index')->middleware('auth');
	Route::view('app', 'livewire.admins.index')->middleware('auth');
	Route::view('themas-components', 'livewire.themacoms.index')->middleware('auth');
	Route::view('themas', 'livewire.themas.index')->middleware('auth');
	Route::view('editors', 'livewire.editors.index')->middleware('auth');
	Route::view('componentes', 'livewire.componentes.index')->middleware('auth');
	Route::view('backups', 'livewire.backups.index')->middleware('auth');
	Route::view('uploadplans', 'livewire.uploadplans.index')->middleware('auth');
	Route::view('uploadthumbnails', 'livewire.uploadthumbnails.index')->middleware('auth');
	Route::view('uploadsizes_thumbnails', 'livewire.uploadsizes_thumbnails.index')->middleware('auth');
	Route::view('siteconfigs', 'livewire.siteconfigs.index')->middleware('auth');
	Route::view('uploadsizes', 'livewire.uploadsizes.index')->middleware('auth');
	Route::view('uploadimages', 'livewire.uploadimages.index')->middleware('auth');
	Route::view('uploadfolders', 'livewire.uploadfolders.index')->middleware('auth');
	Route::view('uploadfolder', 'livewire.uploadfolder.index')->middleware('auth');
	
	
Route::view('admin/tags', 'livewire.tags.index')->middleware('auth')->name('admin.tags');
Route::view('admin/appstags', 'livewire.apps0tags.index')->middleware('auth')->name('admin.appstags');

Route::view('admin/apps/root/editor-apps', 'livewire.appeditors.index')->middleware('auth')->name('create.root.app');

//Route::any('/codex-image-upload', [EditorjsController::class, 'imageUpload'])->name('image.upload');
Route::post('/codex-image-upload', [EditorjsController::class, 'imageUpload'])->name('image.upload');

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

    Route::view('admin/appscategors', 'livewire.apps0categors.index')->middleware('auth')->name('admin.appcategors');

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

    Route::view('admin/test', 'livewire.tests.index')->middleware('can:admin.test');
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
