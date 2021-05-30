<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::redirect('/','users');

Route::resource('users',UsersController::class);
