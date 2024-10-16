<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', function () {
    return view('admin.dashboard');
});


Route::get('/admin/users', function () {
    return view('admin.users.index');
});


Route::get('/admin/user/profile', function () {
    return view('admin.users.profile');
});



Route::get('/admin/properties', function () {
    return view('admin.properties.properties');
});