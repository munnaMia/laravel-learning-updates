<?php

use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\IdeaContorller;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/ideas', [IdeaContorller::class, 'index']);
    Route::get('/ideas/create', [IdeaContorller::class, 'create']);
    Route::post('/ideas', [IdeaContorller::class, 'store']);
    Route::get('/ideas/{idea}', [IdeaContorller::class, 'show']);
    Route::get('/ideas/{idea}/edit', [IdeaContorller::class, 'edit']);
    Route::patch('/ideas/{idea}', [IdeaContorller::class, 'update']);
    Route::delete('/ideas/{idea}', [IdeaContorller::class, 'destroy']);

    Route::get('/logout', [SessionController::class, 'destroy']);
});


Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterUserController::class, 'create']);
    Route::get('/register', [RegisterUserController::class, 'store']);

    Route::get('/login', [SessionController::class, 'create'])->name('/login');
    Route::post('/login', [SessionController::class, 'store']);
});


Route::get('/admin', function () {
    // Gate::authorize('view-admin'); // cloure based
    return 'admin panel';
})->can('view-admin');
