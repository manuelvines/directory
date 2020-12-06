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

Route::get('/', 'PublicController@index')->name('welcome');


/*AUTH*/
Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Auth::routes();



/*TERMINOS Y CONDIONES*/
Route::view('aviso-privacidad','frontend.aviso-privacidad')->name('aviso-privacidad');
Route::view('terms-front','frontend.terms')->name('terms-front');


/**RUTAS DEL FRONTEND*/
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/friend','Auth\VerificationController@terms')->name('terms');
Route::get('/friend/{id}','PublicController@publicProfile')->name('friend');
Route::get('/experiencia/{id}','PublicController@publicExperience')->name('experience');
Route::get('/tag/{id}', 'PublicController@showExperiencesByTag')->name('tag');
Route::get('/statesByCountry/{id}','StateController@statesByCountry')->name('statesByCountry');
Route::get('/statesByLike/{param}','StateController@showLike')->name('statesByLike');
Route::get('/buscar','PublicController@search')->name('buscar');
/**
 * DASHBOARD RUTAS
 */

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

/*
*Appoinments
*/
Route::resource('appointment','AppointmentController');
Route::get('acept-appointment/{id}','AppointmentController@accept')->name('acept-appointment');
Route::get('reject-appointment/{id}','AppointmentController@reject')->name('reject-appointment');

/**
 * Notifications
 */
Route::get('view-notification/{id}', 'NotificationController@show')->name('view-notification');
Route::get('mark-all-asread','NotificationController@markAllasRead')->name('mark-all-asread');


/**
 *SISTEMA DE PAGOS
 */
Route::get('/checkout/{slug}', 'PaymentController@checkout')->name('checkout');
Route::post('/payments/pay','PaymentController@pay')->name('pay');
Route::get('/payments/approval','PaymentController@approval')->name('approval');
Route::get('/payments/cancelled','PaymentController@cancelled')->name('cancelled');
Route::view('/thanks','frontend.thanks')->name('thanks');


Route::get('/test','MessagesController@AppointmentRequest');