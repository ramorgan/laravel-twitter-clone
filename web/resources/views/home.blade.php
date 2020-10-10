@extends('layouts.app')

@section('content')
    <div class="lg:flex lg:justify-between">
        <div class="lg:w-32">
            @include('_sidebar-links')
        </div>


        <div class="flex-1 lg:mx-10" style="max-width:700px">
            @include('_publish_tweet_panel')


            <div id="time-line" class="border border-gray-300 rounded-lg">
                @foreach($tweets as $tweet)
                    @include('_tweet')
                @endforeach
            </div>

        </div>


        <div class="lg:w-1/6 bg-blue-100 rounded-large p-4">
            @include('_friends_list')
        </div>
    </div>
@endsection
