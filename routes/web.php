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
})->name('welcome');


Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');



Route::view('detalle','welcome')->name('detalle');


Route::view('filtro','frontend.filter')->name('filtro');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/friend','Auth\VerificationController@terms')->name('terms');


Route::get('/friend/{id}','PublicController@publicProfile')->name('friend');
Route::get('/experiencia/{id}','PublicController@publicExperience')->name('experience');


Route::resource('profile','ProfileController');
Route::resource('experience','ExperienceController');


Route::get('/statesByCountry/{id}','StateController@statesByCountry')->name('statesByCountry');
Route::get('/experiencia','ProductController@index')->name('experiencia');


/**
 * Actualizar Foto
 */
Route::get('/change-avatar', 'PhotoController@changeAvatarView' )->name('change-avatar');
Route::post('/change-update', 'PhotoController@changeAvatarUpdate' )->name('change-update');

/**
 *Verificar documentos 
 */
Route::get('/documents', 'DocumentController@index' )->name('upload-document');
Route::post('/docs-store', 'DocumentController@store' )->name('store-document');

