@props(['posts'])

<x-post-feature-card :post="$posts[0]"/>

@if ($posts->count() > 1)
    <div class="lg:grid lg:grid-cols-6">
        @foreach ($posts->skip(1) as $post)
            <x-post-card :post="$post"/>
        @endforeach
    </div>
@endif
