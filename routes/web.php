<?php

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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('login/google', 'Auth\LoginController@redirectToProviderg');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallbackg');










Route::get('/login/agence', 'Auth\LoginController@showAdminLoginForm');
Route::get('/register/agence', 'Auth\RegisterController@showAdminRegisterForm');


Route::post('/login/agence', 'Auth\LoginController@adminLogin');

Route::get('/agence', 'AgenceController@index');
Route::get('/agence/{id}/details','AgenceController@details');
Route::post('/agence/{id}/details','AgenceController@store');





Route::get('/admin/hotel',"HotelController@index");
Route::get('/admin/hotel/ajout',"HotelController@create");
Route::post('/admin/hotel/',"HotelController@store");
Route::get('/admin/hotel/{id}/edit',"HotelController@edit");
Route::put('/admin/hotel/{id}',"HotelController@update");
Route::delete('/admin/hotel/{id}',"HotelController@destroy");


Route::get('/admin/user',"usershController@index");
Route::get('/admin/user/ajout',"usershController@create");
Route::post('/admin/user/',"usershController@store");
Route::get('/admin/user/{id}/edit',"usershController@edit");
Route::put('/admin/user/{id}',"usershController@update");
Route::delete('/admin/user/{id}',"usershController@destroy");

Route::get('/home/hotel/{id}',"hotelController@affiche");
Route::post('/home/hotel/{id}',"ReservationController@store");


Route::get('/admin/reservation',"ReservationController@index");
Route::delete('/admin/reservation/{id}',"ReservationController@destroy");
Route::put('/admin/reservation/{id}',"ReservationController@update");
Route::put('/admin/reservation/{id}/annuler',"ReservationController@annuler");



Route::get('/home/Mesreservations',"ReservationController@indexclient");

Route::delete('/home/reservation/{id}',"ReservationController@destroyy");