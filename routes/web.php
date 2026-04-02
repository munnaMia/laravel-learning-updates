<?php

use App\Models\Idea;
use Illuminate\Support\Facades\Route;

Route::get('/ideas', function () {
    // $ideas = DB::table('ideas')->get();
    $ideas = Idea::all();

    return view('ideas/index', [
        'idea' => $ideas
    ]);
});

Route::get('/ideas/{idea}', function (Idea $idea) {
    return view('ideas.show', [
        'idea' => $idea
    ]);
});

Route::post('/ideas', function () {
    $idea = request('idea');

    Idea::create([
        'description' => $idea,
        'state' => 'pending'
    ]);

    return redirect('/ideas');
});


Route::get('/delete_ideas', function () {
    Idea::truncate();
    return redirect('/ideas');
});
