<?php

use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\IdeaContorller;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/ideas', [IdeaContorller::class, 'index']);
Route::get('/ideas/create', [IdeaContorller::class, 'create']);
Route::post('/ideas', [IdeaContorller::class, 'store']);
Route::get('/ideas/{idea}', [IdeaContorller::class, 'show']);
Route::get('/ideas/{idea}/edit', [IdeaContorller::class, 'edit']);
Route::patch('/ideas/{idea}', [IdeaContorller::class, 'update']);
Route::delete('/ideas/{idea}', [IdeaContorller::class, 'destroy']);

Route::get('/register', [RegisterUserController::class, 'create']);
Route::get('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::get('/logout', [SessionController::class, 'destroy']);
