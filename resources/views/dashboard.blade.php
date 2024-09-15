<x-app-layout>
    <x-slot name="header">
    </x-slot>
    
    <div class="search">
        
    </div>
    
    <div class="posts">
        @foreach ($posts as $post)
            <div class="post">
                    <h2 class="title">
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                <p class="ingredient">{{ $post->ingredient }}</p>
                <div class="id">
                    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                    <a href="/categories/{{ $post->type_category->id }}">{{ $post->type_category->name }}</a>
                    <a href="/categories/{{ $post->calorie_category->id }}">{{ $post->calorie_category->name }}</a>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
