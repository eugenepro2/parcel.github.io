<?php

use Illuminate\Support\Facades\Auth;
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
});



Route::get('/step/{id}', 'FormController@index')->name('form')->where('id', '[1-6]')->middleware(['auth', 'verified']);
Route::post('/step/{id}', 'FormController@store')->name('send')->where('id', '[1-6]')->middleware(['auth', 'verified']);
Route::get('/go-live', 'FormController@endStep')->name('go-live')->middleware(['auth', 'verified']);

Route::get('/admin/index', 'AdminController@index')->name('admin-index')->middleware(['auth', 'verified', 'admin']);
Route::put('/admin/update/{id}', 'AdminController@update')->name('admin-update')->middleware(['auth', 'verified']);

Auth::routes(['verify' => true]);

Route::get('/verified', function () {
    return view('auth.verified');
})->name('verified');




