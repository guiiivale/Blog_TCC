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
});
Auth::routes();
            
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::get('user', ['as' => 'user.index', 'uses' => 'App\Http\Controllers\UserController@index']);
	Route::get('category', ['as' => 'category.index', 'uses' => 'App\Http\Controllers\CategoryController@index']);
	Route::get('category/create', ['as' => 'category.create', 'uses' => 'App\Http\Controllers\CategoryController@create']);
	Route::get('category/edit/{id}', ['as' => 'category.edit', 'uses' => 'App\Http\Controllers\CategoryController@edit']);
	Route::get('category/delete/{id}', ['as' => 'category.delete', 'uses' => 'App\Http\Controllers\CategoryController@delete']);
	Route::get('user/create', ['as' => 'user.create', 'uses' => 'App\Http\Controllers\UserController@create']);
	Route::get('user/edit/{id}', ['as' => 'user.edit', 'uses' => 'App\Http\Controllers\UserController@edit']);
	Route::get('user/delete/{id}', ['as' => 'user.delete', 'uses' => 'App\Http\Controllers\UserController@delete']);
	Route::put('profile/password/{id}', ['as' => 'user.password', 'uses' => 'App\Http\Controllers\UserController@password']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::resource("category", "App\Http\Controllers\CategoryController");
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
