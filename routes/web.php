<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\ChatController::class, 'index']);
Route::get('/chat', [App\Http\Controllers\ChatController::class, 'index'])->name('chat.index');
Route::get('/chat/{room}', [App\Http\Controllers\ChatController::class, 'show'])->name('chat.room');
