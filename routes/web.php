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
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');



Route::view('detalle','welcome')->name('detalle');
Route::view('filtro','frontend.filter')->name('filtro');
Route::view('aviso-privacidad','frontend.aviso-privacidad');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/friend','Auth\VerificationController@terms')->name('terms');


Route::get('/friend/{id}','PublicController@publicProfile')->name('friend');
Route::get('/experiencia/{id}','PublicController@publicExperience')->name('experience');




Route::get('/statesByCountry/{id}','StateController@statesByCountry')->name('statesByCountry');
Route::get('/experiencia','ProductController@index')->name('experiencia');
Route::resource('experience','ExperienceController');


/**
 *  PROFILE SETTING
 */
Route::get('/change-avatar', 'PhotoController@changeAvatarView' )->name('change-avatar');
Route::post('/change-update', 'PhotoController@changeAvatarUpdate' )->name('change-update');
Route::resource('profile','ProfileController');
Route::get('/documents', 'DocumentController@index' )->name('upload-document');
Route::post('/docs-store', 'DocumentController@store' )->name('store-document');
Route::get('/geolocation','ProfileController@geolocation')->name('geolocation');

/*
*Experiencia
*/
Route::resource('experience','ExperienceController');
