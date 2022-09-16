<?php

use App\Http\Controllers\Admin\CRUDUserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:admin-permissions']], function () {
    Route::resource('/users', CRUDUserController::class)
        ->names('admin.users');
});
