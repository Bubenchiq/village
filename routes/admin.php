<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:admin-permissions']], function () {
    Route::resource('/users', UserController::class)
        ->names('admin.users');
});
