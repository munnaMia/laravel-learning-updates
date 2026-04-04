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

// edit
Route::get('/ideas/{idea}/edit', function (Idea $idea) {
    return view('ideas.edit', [
        'idea' => $idea
    ]);
});

// update
Route::patch('/ideas/{idea}', function (Idea $idea) {
    $idea->update([
        'description' => request('description'),
    ]);

    return redirect('/ideas/' . $idea->id);
});

// destroy
Route::delete('/ideas/{idea}', function (Idea $idea) {
    $idea->delete();

    return redirect('/ideas');
});

// store  
Route::post('/ideas', function () {
    $idea = request('idea');

    Idea::create([
        'description' => $idea,
        'state' => 'pending'
    ]);

    return redirect('/ideas');
});
