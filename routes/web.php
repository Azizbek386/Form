<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;


Route::get('/user/form', [PostController::class, 'index'])->name('index');

Route::post('/Post', [PostController::class, 'store'])->name('store');
Route::delete('/delete', [PostController::class, 'delete'])->name('delete');
Route::put('/update', [PostController::class, 'update'])->name('update');
Route::patch('/patch', [PostController::class, 'patch'])->name('patch');
