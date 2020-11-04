<h3 class="font-bold text-xl mb-4">Following&nbsp;😊 </h3>

<ul>
    @forelse(current_user()->follows as $user)
        <li class="{{$loop->last ? '' : 'mb-4'}}">
            <div>
                <a href="{{route('profile', $user)}}" class="flex item-center text-sm">
                    <img
                        src="{{$user->avatar}}"
                        alt="avatar"
                        class="profile rounded-full mr-2"
                        width="40"
                        height="40"
                    >
                    <p>{{$user->name}}</p>
                </a>
            </div>
        </li>
    @empty
        <li class="p-4">No followed accounts yet!</li>
    @endforelse
</ul>


{{--http://lorempixel.com/40/40/cats/--}}
{{--https://picsum.photos/seed/picsum/40/40--}}
{{--https://joeschmoe.io/api/v1/random--}}
