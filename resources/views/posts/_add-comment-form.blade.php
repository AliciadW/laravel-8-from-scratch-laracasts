@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf

            <header class="flex items-center">
                <img class="rounded-full" src="https://i.pravatar.cc/100?u={{ auth() -> id() }}"
                     alt="avatar image" width="40"
                     height="40">

                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <div class="mt-4">
                                    <textarea name="body" class="w-full text-sm" rows="5"
                                              placeholder="This is a silly placeholder!"
                                              required></textarea>


                @error('body')
                <span class="text-xs text-red">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end mt-6 border-t border-gray-200 pt-3">
                <x-primary-button>Post</x-primary-button>
            </div>

        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">Register</a>
        or
        <a href="/login" class="hover:underline">log in</a>
        to leave a comment.
    </p>
@endauth
