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
    return view('frontend.index');
});

Route::get('errors', 'ErrorController@error403')->name('403');
Auth::routes();
   
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/vendor', 'HomeController@vendor')->name('vendor');
   
Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', 'WebController\Backend\RoleController');
    Route::resource('permissions', 'WebController\Backend\PermissionController');
    Route::resource('users', 'WebController\Backend\UserController');
    Route::resource('blogs', 'WebController\Backend\BlogController');
});
