<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterMahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', '/mahasiswa');

Route::prefix('/mahasiswa')->group(function () {
    Route::get('/', [MasterMahasiswaController::class, 'displayData']);
    Route::get('/{id}/delete', [MasterMahasiswaController::class, 'deleteData']);
    Route::get('/{id}/edit', [MasterMahasiswaController::class, 'displayEditForm']);
    Route::view('/create', 'mahasiswa.insertForm');

    Route::post('/insert', [MasterMahasiswaController::class, 'insertData']);
    Route::put('/{id}/put', [MasterMahasiswaController::class, 'updateData']);
});
