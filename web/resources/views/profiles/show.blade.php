@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <img
            src="https://placehold.it/700x300"
            alt="profile-banner"
            class="mb-2 rounded-lg"
        >


        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>
            <div>
                <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs">Edit profile</a>
                <a href="" class="bg-blue-500 rounded-lg shadow py-2 px-4 text-white text-xs">Follow</a>
            </div>
        </div>

        <p class="text-sm">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores corporis cum cupiditate
            deserunt dignissimos dolore ex, harum hic iste, itaque iure, omnis optio quam sit tempora
            temporibus veniam veritatis voluptatum.
        </p>

        <img
            src="{{$user->avatar}}"
            alt="avatar"
            class="rounded-full mr-2 absolute"
            style="width: 150px; left: calc(50% - 75px); top: 200px;"
        >

    </header>

    <hr/>


    @include('_timeline', ['tweets' => $user->tweets])

@endsection
