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
            Route::post("/update/{id}",'roomController@update_room')->name('update.room');
            Route::post('/save','roomController@create_room')->name('save.room');
            Route::get('/','pagesController@rooms')->name('all.rooms');
        });
        Route::get('/customers','pagesController@customers')->name('admin.customers');
        Route::post('/customer/save','pagesController@save_customer')->name('create.customer');

        // user management in admins and only accesible for super admin
        Route::prefix('users')->group(function(){

            // users 
            Route::get('/','usersController@index')->name('all.users'); // list
            Route::get('create','usersController@create')->name('create.user'); //add new
            Route::get('profile','usersController@profile')->name('profile.user'); // profile
            Route::post('save','usersController@save')->name('save.user');  // to create new
            Route::put('update/{id}','usersController@updateUser')->name('update.user');  // to Update User

            Route::get('/{id}','usersController@useredit')->name('user.edit'); // open edit page
            Route::delete('/{id}','usersController@userdelete')->name('user.delete'); // delete

            // Roles 
            Route::get('/roles','usersController@rolelist')->name('role.users');
            Route::post('/roles','usersController@rolesave')->name('role.save');
            Route::delete('/roles/{id}','usersController@roledelete')->name('role.delete');

            // Permissions 
            Route::get('/permission','usersController@permissionlist')->name('permission.list');
            Route::post('/permission','usersController@permissionsave')->name('permission.save');
            Route::delete('/permission/{id}','usersController@permissiondelete')->name('permission.delete');
        });

        Route::prefix('bookings')->group(function(){
            Route::get('/','bookings@index')->name('all.bookings');
        });

       
});
