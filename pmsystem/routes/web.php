<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\usersController;


Route::get('/login', function(){
    return view('frontend.login');
});

Route::get('/', function () {
    return view('frontend.layout.index');
});
Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->group(function(){
        Route::get('/', 'pagesController@dashboard')->name('admin.dashboard');
        // rooms in admin
        Route::prefix('rooms')->group(function(){
            Route::get('create','pagesController@create_room')->name('create.room');
            Route::get('/','pagesController@rooms')->name('all.rooms');
        });
        Route::get('/customers','pagesController@customers')->name('admin.customers');

        // user management in admins and only accesible for super admin
        Route::prefix('users')->group(function(){
            Route::get('/','users@index')->name('all.users');
            Route::get('create','usersController@create')->name('create.user');
            Route::get('profile','usersController@profile')->name('profile.user');

            Route::post('save','usersController@save')->name('save.user');
            Route::get('/store','users@store')->name('store.user');
            Route::get('/roles','users@rolelist')->name('role.users');
            Route::put('/roles','users@roleupdate')->name('role.update');
        });

        Route::prefix('bookings')->group(function(){
            Route::get('/','bookings@index')->name('all.bookings');
        });

       
});
