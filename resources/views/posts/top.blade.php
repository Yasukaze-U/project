<x-app-layout>
    <x-slot name="header">
        <h1>header</h1>
    </x-slot>
    <h1>vitabite</h1>
    <div class="posts">
        @foreach ($posts as $post)
            <div class="post">
                <h2 class="title">{{ $post->title }}</h2>
                <p class="body">{{ $post->body }}</p>
                <div class="id">
                    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                    <a href="/categories/{{ $post->type_category->id }}">{{ $post->type_category->name }}</a>
                    <a href="/categories/{{ $post->caloriecategory->id }}">{{ $post->caloriecategory->name }}</a>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>