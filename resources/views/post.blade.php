<x-layout>
    <article>
        <h1>
            {{ $post->title }}
        </h1>
        <p>
            By {{ $post->user->name }} in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a>
        </p>
        <div>
            {!! $post->body !!}
        </div>
    </article>

    <a href="/">Go Home</a>
</x-layout>
