<ul>
    <li>
        <a class="font-bold text-lg mb-4 block" href="{{route('home')}}">Home</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="/explore">Explore</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="#">Notifications</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="#">Messages</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="#">Bookmarks</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="#">Lists</a>
    </li>
    @if (!Auth::guest())
    <li>
        <a class="font-bold text-lg mb-4 block" href="{{route('profile', current_user())}}">Profile</a>
    </li>
    @endif
    <li>
        <form method="POST" action="/logout">
            @csrf

            <button class="font-bold text-lg">Logout</button>
        </form>
    </li>
</ul>
