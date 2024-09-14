<x-app-layout>
    <x-slot name="header">
    </x-slot>
    
    <div class="post">
        <h1 class="title">{{ $post->title }}</h1>
        <div class="ingredient">
            <h2>具財：</h2>
            <p>{{ $post->ingredient }}</p>
        </div>
        <div class="nutrients">
            <h2>栄養成分</h2>
            <p>
                <h3>熱量：{{ $post->calorie }}</h3>
            </p>
            <p>
                <h3>タンパク質：{{ $post->protein }}</h3>
            </p>
            <p>
                <h3>脂肪：{{ $post->fat }}</h3>
            </p>
            <p>
                <h3>炭水化物：{{ $post->carbonhydrate }}</h3>
            </p>
        </div>
        <div class="body">
            <h2>手順：</h2>
            <p>{{ $post->body }}</p>
        </div>
        <div class="id">
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
            <a href="/categories/{{ $post->type_category->id }}">{{ $post->type_category->name }}</a>
            <a href="/categories/{{ $post->calorie_category->id }}">{{ $post->calorie_category->name }}</a>
        </div>
    </div>
</x-app-layout>