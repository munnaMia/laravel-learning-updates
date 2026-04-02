<?php

use App\Models\Idea;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // $ideas = DB::table('ideas')->get();
    $ideas = Idea::query()
        ->when(
            request('state'),
            function ($query, $state) {
                $query->where('state', $state);
            }
        )->get();

    return view('ideas', [
        'idea' => $ideas
    ]);
});


Route::post('/ideas', function () {
    $idea = request('idea');

    Idea::create([
        'description' => $idea,
        'state' => 'pending'
    ]);

    return redirect('/');
});


Route::get('/delete_ideas', function () {
    session()->forget('ideas');
    return redirect('/');
});
