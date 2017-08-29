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

Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as'   => 'product.index'
]);

Route::get('/add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as'   => 'product.addToCart'
]);

Route::group(['prefix' => 'user'], function(){
    /*
        ============================
            For Guest Users only
        ============================
    */

    Route::group(['middleware' => 'guest'], function(){
        Route::get('/signup', [
            'uses' => 'UserController@getSignup',
            'as'   => 'user.signup'
        ]);
    
        Route::post('/signup', [
            'uses' => 'UserController@postSignup',
            'as'   => 'user.signup'
        ]);
    
        Route::get('/signin', [
            'uses' => 'UserController@getSignin',
            'as'   => 'user.signin'
        ]);
    
        Route::post('/signin', [
            'uses' => 'UserController@postSignin',
            'as'   => 'user.signin'
        ]);
    });
    /* End of Guest Users */

    /*
        ===================================
            For Authenticated Users only
        ===================================
    */
    
    Route::group(['middleware' => 'auth'], function(){
        Route::get('/logout', [
            'uses' => 'UserController@getLogout',
            'as'   => 'user.logout'
        ]);
    
        Route::get('/profile', [
            'uses' => 'UserController@getProfile',
            'as'   => 'user.profile'
        ]);
    
        Route::post('/profile', [
            'uses' => 'UserController@postProfile',
            'as'   => 'user.profile'
        ]);
    });

     /* End of Authenticated Users */
});