<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img
                src="https://placehold.it/700x300"
                alt="profile-banner"
                class="mb-2 rounded-lg"
            >
            <img
                src="{{$user->avatar}}"
                alt="avatar"
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="left:50%;"
                width="150"
            >
        </div>

        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>
            <div class="flex">
                <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs">Edit profile</a>
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores corporis cum cupiditate
            deserunt dignissimos dolore ex, harum hic iste, itaque iure, omnis optio quam sit tempora
            temporibus veniam veritatis voluptatum.
        </p>


    </header>

{{--    <hr/>--}}


    @include('_timeline', ['tweets' => $user->tweets])

</x-app>
