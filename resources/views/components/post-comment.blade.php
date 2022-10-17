@props(['comment'])

<article class="flex bg-gray-100 border border-gray-200 p-6 rounded-xl space-x-4">
    <div class="flex-shrink-0">
        <img class="rounded-xl" src="https://i.pravatar.cc/100?u={{ $comment -> id }}" alt="avatar image" width="60"
             height="60">
    </div>
    <div>
        <header>
            <h3 class="font-bold">{{ $comment->author->username }}</h3>
            <p class="text-xs">
                Posted
                <time>{{ $comment->created_at->diffForHumans() }}</time>
            </p>
        </header>

        <p class="mt-4">
            {{ $comment->body }}
        </p>
    </div>
</article>
