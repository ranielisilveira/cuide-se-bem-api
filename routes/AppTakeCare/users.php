<?php

use Illuminate\Support\Facades\Route;


Route::get('users', 'UsersController@index')->name('users.index');
