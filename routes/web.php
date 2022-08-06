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

        Route::resource('my-activity', 'MyActivityController');
        Route::post('/my-activity/data', 'MyActivityController@data')->name('my-activity.data');
    });

    Route::prefix('/master')->as('master.')->namespace('Master')->group(function() {
        Route::middleware('permission:view-product-category')->group(function() {
            Route::resource('product-category', 'ProductCategoryController')->except(['show']);
            Route::post('/product-category/data', 'ProductCategoryController@data')->name('product-category.data');
        });

        Route::middleware('permission:view-position')->group(function() {
            Route::resource('position', 'PositionController')->except(['show']);
            Route::post('/position/data', 'PositionController@data')->name('position.data');
        });

        Route::middleware('permission:view-category')->group(function() {
            Route::resource('category', 'CategoryController')->except(['show']);
            Route::post('/category/data', 'CategoryController@data')->name('category.data');
        });

        Route::middleware('permission:view-article')->group(function() {
            Route::resource('article', 'ArticleController')->except(['show']);
            Route::post('/article/data', 'ArticleController@data')->name('article.data');
        });
    });

    Route::namespace('Employee')->group(function() {
        Route::middleware('permission:view-recruitment')->group(function() {
            Route::resource('recruitment', 'RecruitmentController');
            Route::post('/recruitment/data', 'RecruitmentController@data')->name('recruitment.data');
            Route::post('/recruitment/{id}/verify/{type}', 'RecruitmentController@verify')->name('recruitment.verify');
            Route::post('/recruitment/{id}/cancel', 'RecruitmentController@cancel')->name('recruitment.cancel');
            Route::post('/recruitment/{id}/schedule', 'RecruitmentController@schedule')->name('recruitment.schedule');
            Route::post('/recruitment/{id}/validate/{type}', 'RecruitmentController@validation')->name('recruitment.validate');
            Route::post('/recruitment/{id}/file/data', 'RecruitmentController@getFileData')->name('recruitment.file.data');
            Route::post('/recruitment/{id}/file', 'RecruitmentController@storeFile')->name('recruitment.file.store');
            Route::delete('/recruitment/{id}/file/{fileId}', 'RecruitmentController@destroyFile')->name('recruitment.file.destroy');
        });
    });
});

Route::redirect('{id}', '{id}/1');
Route::middleware('guest')->as('recruitment.register.')->namespace('Employee')->group(function() {
    Route::get('{id}/1', 'RegisterController@showStepOneForm')->name('step-1');
    Route::get('{id}/2', 'RegisterController@showStepTwoForm')->name('step-2');
    Route::get('{id}/3', 'RegisterController@showStepThreeForm')->name('step-3');
    Route::get('{id}/4', 'RegisterController@showStepFourForm')->name('step-4');
    Route::get('{id}/5', 'RegisterController@showStepFiveForm')->name('step-5');
    Route::get('{id}/6', 'RegisterController@showStepSixForm')->name('step-6');
    Route::get('{id}/7', 'RegisterController@showStepSevenForm')->name('step-7');
    Route::get('{id}/8', 'RegisterController@showStepEightForm')->name('step-8');
    Route::get('{id}/9', 'RegisterController@showStepNineForm')->name('step-9');
    Route::get('{id}/10', 'RegisterController@showStepTenForm')->name('step-10');
    Route::get('{id}/11', 'RegisterController@showStepElevenForm')->name('step-11');
    Route::get('{id}/12', 'RegisterController@showStepTwelveForm')->name('step-12');
    Route::get('{id}/13', 'RegisterController@showStepThirteenForm')->name('step-13');
    Route::get('{id}/14', 'RegisterController@showStepFourteenForm')->name('step-14');
    Route::get('{id}/15', 'RegisterController@showStepFifteenForm')->name('step-15');
    Route::post('{id}/1', 'RegisterController@validateStepOne')->name('step-1.validate');
    Route::post('{id}/2', 'RegisterController@validateStepTwo')->name('step-2.validate');
    Route::post('{id}/3', 'RegisterController@validateStepThree')->name('step-3.validate');
    Route::post('{id}/4', 'RegisterController@validateStepFour')->name('step-4.validate');
    Route::post('{id}/5', 'RegisterController@validateStepFive')->name('step-5.validate');
    Route::post('{id}/6', 'RegisterController@validateStepSix')->name('step-6.validate');
    Route::post('{id}/7', 'RegisterController@validateStepSeven')->name('step-7.validate');
    Route::post('{id}/8', 'RegisterController@validateStepEight')->name('step-8.validate');
    Route::post('{id}/9', 'RegisterController@validateStepNine')->name('step-9.validate');
    Route::post('{id}/10', 'RegisterController@validateStepTen')->name('step-10.validate');
    Route::post('{id}/11', 'RegisterController@validateStepEleven')->name('step-11.validate');
    Route::post('{id}/12', 'RegisterController@validateStepTwelve')->name('step-12.validate');
    Route::post('{id}/13', 'RegisterController@validateStepThirteen')->name('step-13.validate');
    Route::post('{id}/14', 'RegisterController@validateStepFourteen')->name('step-14.validate');
    Route::post('{id}/15', 'RegisterController@validateStepFifteen')->name('step-15.validate');
});