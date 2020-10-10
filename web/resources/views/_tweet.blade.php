<div class="flex p-4 border-b border-b-gray-400">
    <a href="{{route('profile', $tweet->user)}}">
        <div class="mr-2 flex-shrink-0">
            <img
                src="{{$tweet->user->avatar}}"
                alt="avatar"
                class="rounded-full mr-2"
            />
        </div>
    </a>

    <div>
        <h5 class="font-bold">
            <a href="{{route('profile', $tweet->user)}}">
                {{$tweet->user->name}}
            </a>
        </h5>
        <p class="text-sm">
            {{$tweet->body}}
        </p>
    </div>
</div>
