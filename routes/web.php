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


Route::get('/','App\Http\Controllers\SaccoController@showSacco');

Route::get('login','App\Http\Controllers\AuthController@login');
Route::post('reg','App\Http\Controllers\AuthController@register')->name('registerUser');
Route::post('log','App\Http\Controllers\AuthController@loginUser')->name('loginUser');
Route::get('carList/{id}','App\Http\Controllers\TripController@carListing');
Route::get('singleCar/{id}','App\Http\Controllers\TripController@singleCar');
Route::post('bookSeat','App\Http\Controllers\TripController@bookSeat')->name('bookSeat');
Route::get('getPrice','App\Http\Controllers\TripController@getPrice');
Route::get('computePrice','App\Http\Controllers\TripController@computePrice');

Route::resource('rides','App\Http\Controllers\RideController');
Route::view('profile','passanger.profile');
Route::view('chat','passanger.chat');
//conductor
Route::resource('conductor','App\Http\Controllers\ConductorController');
Route::view('cProfile','conductor.profile');
Route::view('cRide','conductor.rides');
Route::get('booked','App\Http\Controllers\ConductorTripController@passanger');
Route::resource('route','App\Http\Controllers\RouteController');
Route::resource('trip','App\Http\Controllers\TripController');



//admin
Route::view('admin/login','admin.login');
Route::resource('admin','App\Http\Controllers\SaccoController');
Route::get('matatu/{id}','App\Http\Controllers\SaccoController@showMatatu');
Route::get('getMatatuDetail','App\Http\Controllers\MatatuController@getMatatuDetail');
Route::get('getSaccoDetail','App\Http\Controllers\SaccoController@getSaccoDetail');
Route::post('editSacco','App\Http\Controllers\SaccoController@editSacco')->name('sacco.edit');
Route::post('editMatatu','App\Http\Controllers\MatatuController@editMatatu')->name('matatu.edit');
Route::post('deleteMatatu','App\Http\Controllers\MatatuController@destroy');
Route::post('deleteSacco','App\Http\Controllers\SaccoController@destroy');

Route::post('mat','App\Http\Controllers\MatatuController@store')->name('mat.store');
Route::get('matatuProfile/{id}','App\Http\Controllers\MatatuController@profile');
Route::resource('passanger','App\Http\Controllers\UserController');
Route::get('getUserDetail','App\Http\Controllers\UserController@getUserDetail');
Route::post('editUser','App\Http\Controllers\UserController@editUser')->name('user.edit');
Route::post('deleteUser','App\Http\Controllers\UserController@destroy');
Route::view('support','admin.chat');
Route::view('cRides','conductor.rides');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
