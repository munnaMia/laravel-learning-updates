<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $idea = session()->get('ideas');

    return view('ideas', [
        'idea' => $idea
    ]);
});


Route::post('/ideas', function () {
    $idea = request('idea');

    session()->push('ideas', $idea);

    return redirect('/');
});


Route::get('/delete_ideas', function () {
    session()->forget('ideas');
    return redirect('/');
});
