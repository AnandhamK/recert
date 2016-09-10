<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('{all}', function () {
    return view('index');
})->name('home');

Route::get('/unsupported-browser', function() {
    return view('unsupported');
})->name('unsupported');

Route::group(array('prefix' => 'api/v1'), function() {
    // User Routes
    Route::post('/login', 'TokenAuthController@postLogin');
    Route::post('/register', 'TokenAuthController@postRegister');

    Route::get('/logout', 'Auth\AuthController@getLogout');
    Route::get('/profile', 'TokenAuthController@getProfile');

    Route::get('/user/{id?}', 'UserController@getUser');
    Route::put('/user/{id}', 'UserController@updateUser');
    Route::delete('/user/{id}', 'UserController@deleteUser');
    Route::get('/role/{id?}', 'RoleController@getRole');
});
Route::group(['prefix' => 'api/v1', 'middleware' => ['ability:admin,create-role']], function() {
    Route::post('/role', 'RoleController@postRole');
});
Route::group(['prefix' => 'api/v1', 'middleware' => ['ability:admin,update-role']], function() {
    Route::put('/role/{id}', 'RoleController@updateRole');
});
Route::group(['prefix' => 'api/v1', 'middleware' => ['ability:admin,delete-role']], function() {
    Route::delete('/role/{id}', 'RoleController@deleteRole');
});
