<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\usersController;


Route::get('/login', [UsersController::class, 'loginView'])->name('login');
Route::post('/login', [UsersController::class, 'login'])->name('login');
Route::get('/logout', [UsersController::class, 'logout'])->name('logout');




Route::get('/', function () {
    return view('frontend.pages.home');
})->name('home');




Route::prefix('admin')->middleware('auth')->namespace('App\Http\Controllers\Admin')->group(function(){
        Route::get('/', 'pagesController@dashboard')->name('admin.dashboard');
        // rooms in admin
        Route::prefix('rooms')->group(function(){
            Route::get('create','pagesController@create_room')->name('create.room');
            Route::get('edit/{id}','pagesController@edit')->name('edit.room');
            Route::post('/save','roomController@create_room')->name('save.room');
            Route::get('/','pagesController@rooms')->name('all.rooms');
        });
        Route::get('/customers','pagesController@customers')->name('admin.customers');

        // user management in admins and only accesible for super admin
        Route::prefix('users')->group(function(){

            // users 
            Route::get('/','usersController@index')->name('all.users');
            Route::get('create','usersController@create')->name('create.user');
            Route::get('profile','usersController@profile')->name('profile.user');
            Route::post('save','usersController@save')->name('save.user');
            Route::get('/store','users@store')->name('store.user');

            // Roles 
            Route::get('/roles','usersController@rolelist')->name('role.users');
            Route::post('/roles','usersController@rolesave')->name('role.save');
            
            // Permissions 
            Route::get('/permission','usersController@permissionlist')->name('permission.list');
            Route::post('/permission','usersController@permissionsave')->name('permission.save');
            Route::delete('/permission/{id}','usersController@permissiondelete')->name('permission.delete');
        });

        Route::prefix('bookings')->group(function(){
            Route::get('/','bookings@index')->name('all.bookings');
        });

       
});
