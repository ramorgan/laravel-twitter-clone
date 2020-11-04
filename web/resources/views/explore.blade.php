<x-app>
    <div class="grid grid-cols-3">
        @foreach ($users as $user)
            <a href="{{ $user->path() }}" class="flex items-center mb-5">
                <img src="{{ $user->avatar }}"
                     alt="{{ $user->username }}'s avatar"
                     width="60"
                     class="mr-4 rounded"
                >

                <div>
                    <h4 class="font-bold">{{ '@' . $user->username }}</h4>
                </div>
            </a>
        @endforeach
    </div>
    <div class="bg-gray-500">
        {{ $users->links() }}
    </div>
</x-app>
