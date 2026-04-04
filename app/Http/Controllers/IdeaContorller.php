<?php

namespace App\Http\Controllers;

use App\Http\Requests\IdeaRequest;
use App\Http\Requests\StoreIdeaRequest;
use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaContorller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $ideas = DB::table('ideas')->get();
        $ideas = Idea::all();

        return view('ideas/index', [
            'idea' => $ideas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ideas/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IdeaRequest $request)
    {
        // // request()->validate();
        // $request->validate([
        //     'description' => ['required', 'min:10']
        // ]);

        Idea::create([
            'description' =>  request('idea'),
            'state' => 'pending'
        ]);

        return redirect('/ideas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Idea $idea)
    {
        return view('ideas.show', [
            'idea' => $idea
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Idea $idea)
    {
        return view('ideas.edit', [
            'idea' => $idea
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(IdeaRequest $request, Idea $idea)
    {
        $idea->update([
            'description' => request('description'),
        ]);

        return redirect('/ideas/' . $idea->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Idea $idea)
    {
        $idea->delete();

        return redirect('/ideas');
    }
}
