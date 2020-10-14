<div class="flex p-4 border-b border-b-gray-400">
    Hi mom
    <a href="{{$tweet->user->path()}}">
        <div class="mr-2 flex-shrink-0">
            <img
                src="{{$tweet->user->avatar}}"
                alt="avatar"
                class="rounded-full mr-2"
                width="50"
                height="50"
            />
        </div>
    </a>

    <div>
        <h5 class="font-bold">
            <a href="{{$tweet->user->path()}}">
                {{$tweet->user->name}}
            </a>
        </h5>
        <p class="text-sm">
            {{$tweet->body}}
        </p>
    </div>
</div>
