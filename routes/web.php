<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MahasiswaController;





Route::get('/', function () {
    return view('welcome');
});

Route::get('/Mahasiswa/create', [MahasiswaController::class, 'create']);

Auth::routes();

