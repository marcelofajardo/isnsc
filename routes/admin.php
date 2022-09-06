<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\Admin\HomeController;

Route::get('', [HomeController::class,'index']);

Route::resource('alumnos', AlumnoController::class)->names([
    'index' => 'alumnos.index',
    'store' => 'alumnos.store',
    'create' => 'alumnos.create',
]);