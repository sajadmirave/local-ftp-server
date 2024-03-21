<?php

use App\Http\Controllers\FileManagerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('upload');

Route::post('/file-manager/upload',[FileManagerController::class,'upload'])->name('upload.files');
Route::get('/file-manager/links',[FileManagerController::class,'links_page'])->name('file.download.links');
Route::get('/file-manager/download/{file_name}',[FileManagerController::class,'download'])->name('file.download');
Route::get('/file-manager/deleteAll',[FileManagerController::class,'deleteAll'])->name('file.delete.all');
