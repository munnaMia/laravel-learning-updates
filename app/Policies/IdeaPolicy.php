<?php

namespace App\Policies;

use App\Models\Idea;
use App\Models\User;

class IdeaPolicy
{

    // public function view(User $user, Idea $idea): bool
    // {
    //     // if user id and post id match than it's a authorized user
    //     // return $user->id == $idea->user_id
    //     return $user->is($idea->user()); // is just check both id same or not as we have relation on idea with user belongTo
    // }

    // public function create(User $user): bool
    // {
    //     return $user->isAdmin();
    // }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Idea $idea): bool
    {
        // if user id and post id match than it's a authorized user
        // return $user->id == $idea->user_id
        return $user->is($idea->user()); // is just check both id same or not as we have relation on idea with user belongTo
    }
}
