<h3 class="font-bold text-xl mb-4">Following</h3>

<ul>
    @foreach(auth()->user()->follows as $user)
        <li class="mb-4">
            <div class="flex item-center text-sm">
                <img
                    src="{{$user->avatar}}"
                    alt="avatar"
                    class="profile rounded-full mr-2">
                <p>{{$user->name}}</p>
            </div>
        </li>
    @endforeach
</ul>


{{--http://lorempixel.com/40/40/cats/--}}
{{--https://picsum.photos/seed/picsum/40/40--}}
{{--https://joeschmoe.io/api/v1/random--}}
