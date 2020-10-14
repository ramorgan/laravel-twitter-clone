<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{

    public function index()
    {
        //@TODO:change to timeline;
        return view('tweets.index', [
            'tweets' => current_user()->timeline()
        ]);
    }

    public function store()
    {

        $attributes = \request()->validate(['body' => 'required|max:255']);
        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body'],
        ]);

        return redirect()->route('home');
    }
}
