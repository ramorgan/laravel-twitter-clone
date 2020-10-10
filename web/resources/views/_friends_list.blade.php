<h3 class="font-bold text-xl mb-4">Friends</h3>
{{--https://i.pravatar.cc/40--}}
{{--ul>li>div.flex.item-center(img[src=https://i.pravatar.cc/40 alt=avatar].profile.rounded-full.mr-2>span.name{John Doe})*5--}}

<ul>
    @foreach(range(1, 8) as $index)
        <li class="mb-4">
            <div class="flex item-center text-sm">
                <img
                    src="https://api.adorable.io/avatars/40/tweety.png"
                    alt="avatar"
                    class="profile rounded-full mr-2">
                <p>John Doe</p>
            </div>
        </li>
    @endforeach
</ul>


{{--http://lorempixel.com/40/40/cats/--}}
{{--https://picsum.photos/seed/picsum/40/40--}}
{{--https://joeschmoe.io/api/v1/random--}}
