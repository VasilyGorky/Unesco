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

use Illuminate\Support\Facades\Route;

///USER////
Route::get('/', 'User\ItemsController@index');
    Route::resource('item', 'User\ItemsController');
    Route::get('/page/{id}','User\PageController@show');
Route::resource('profile', 'User\ProfileController');
Route::resource('publication', 'User\PublicationController');
Route::any('/download/{id}', 'User\PublicationController@getDownload');
Route::get('/forum', 'User\ForumController@show');


///USER////


///ADMIN////

Route::resource('admin/item', 'Admin\ItemsAdminController')->middleware('authadmin');
//Route::get('admin/item/{id}', 'Admin\ItemsAdminController@show')->middleware('authadmin')->name('itemshow');
Route::resource('admin/user','Admin\UsersAdminController')->middleware('authadmin');

Route::get('admin/page/{id}', 'Admin\PageAdminController@show')->middleware('authadmin')->name('pageshow');
Route::get('admin/page/{id}/edit', 'Admin\PageAdminController@edit')->middleware('authadmin');
Route::put('admin/page/update/{id}', 'Admin\PageAdminController@update')->middleware('authadmin');

Route::delete('admin/item/comment/{id}', 'CommentController@destroy');

///ADMIN////

Route::get('register/confirm/{token}', 'Auth\RegisterController@confirmEmail');
Auth::routes();