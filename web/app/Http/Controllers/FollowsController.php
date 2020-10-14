<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function store(User $user)
    {
        $following = auth()->user()->following($user);
        if($following)
            auth()->user()->unfollow($user);
        else{
            auth()->user()->follow($user);
        }

        return back();
    }
}
