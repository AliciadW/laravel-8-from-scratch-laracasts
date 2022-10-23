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
                <x-form.textarea name="body" placeholder="This is a silly placeholder!"></x-form.textarea>

                <x-form.error name="body"></x-form.error>
            </div>

            <div class="flex justify-end border-t border-gray-200 pt-3">
                <x-form.button>Post</x-form.button>
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
