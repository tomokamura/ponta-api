<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\ImageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/ponta', function () {
    return response()->file(Storage::path("/public/images/001.jpg"));
});

Route::get('upload', [ImageController::class, 'upload']);
Route::post('upload', [ImageController::class, 'uploadPost'])->name('upload.post');
Route::get('image/{id}', [ImageController::class, 'getImage'])->name('get.image');
Route::get('/images', [ImageController::class, 'index'])->name('image.index');
