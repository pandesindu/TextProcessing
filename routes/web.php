<?php

use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\ProsesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('HalamanUpload');
});

Route::get('/proses', [ProsesController::class, 'index']);

//upload file
Route::get('/halamanupload', [FileUploadController::class, 'index']);
Route::post('/upload', [FileUploadController::class, 'upload']);
