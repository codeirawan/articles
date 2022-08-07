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

Auth::routes(['verify' => true, 'register' => false]);

Route::middleware(['auth', 'verified'])->group(function() {
    Route::redirect('/home', url('/'));
    Route::redirect('/password/confirm', url('/'));
    Route::get('/', 'HomeController@index')->name('home');

    Route::namespace('User')->group(function() {
        Route::prefix('/password')->as('password.')->group(function() {
            Route::get('/edit', 'ChangePasswordController@edit')->name('edit');
            Route::post('/', 'ChangePasswordController@update')->name('store');
        });

        Route::middleware('permission:view-role')->group(function() {
            Route::resource('role', 'RoleController')->except(['destroy']);
            Route::post('/role/data', 'RoleController@data')->name('role.data');
        });

        Route::middleware('permission:view-user')->group(function() {
            Route::resource('user', 'UserController');
            Route::post('/user/data', 'UserController@data')->name('user.data');
        });

    });

    Route::prefix('/master')->as('master.')->namespace('Master')->group(function() {
        Route::middleware('permission:view-category')->group(function() {
            Route::resource('category', 'CategoryController')->except(['show']);
            Route::post('/category/data', 'CategoryController@data')->name('category.data');
        });

        Route::middleware('permission:view-article')->group(function() {
            Route::resource('article', 'ArticleController')->except(['show']);
            Route::post('/article/data', 'ArticleController@data')->name('article.data');
        });
    });
});