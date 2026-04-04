<?php

use App\Http\Controllers\IdeaContorller;
use Illuminate\Support\Facades\Route;

Route::get('/ideas', [IdeaContorller::class, 'index']);
Route::get('/ideas/create', [IdeaContorller::class, 'show']);
Route::post('/ideas', [IdeaContorller::class, 'store']);
Route::get('/ideas/{idea}', [IdeaContorller::class, 'show']);
Route::get('/ideas/{idea}/edit', [IdeaContorller::class, 'edit']);
Route::patch('/ideas/{idea}', [IdeaContorller::class, 'update']);
Route::delete('/ideas/{idea}', [IdeaContorller::class, 'destroy']);
