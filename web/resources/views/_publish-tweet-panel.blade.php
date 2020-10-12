<div id="tweet-box" class="border border-blue-400 rounded-lg px-6 py-4 mb-8">
    <form method='POST' action="/tweets">

        @csrf

        <textarea
            name="body"
            id="msg_body"
            placeholder="Whats up Doc?"
            class="w-full bg-gray-600 border border-black"
{{--                    required--}}
                ></textarea>

        <hr class="my-4"/>

        <footer class="flex justify-between">
            <img
                src="{{auth()->user()->avatar}}"
                alt="avatar"
                class="profile rounded-full mr-2"
                width="50"
                height="50"
            >
            <button
                type="submit"
                class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white"
            >Tweet-a-roo
            </button>
        </footer>
    </form>

    @error('body')
    <p class="text-red-500 text-lg mt-2">{{$message}}</p>
    @enderror
</div>
