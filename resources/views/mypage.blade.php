<x-app-layout>
    <x-slot name="header">
    </x-slot>
    
    <div class="myPosts">
        @foreach ($myPosts as $post)
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
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})">削除</button> 
                </form>
            </div>
        @endforeach
        <script>
            function deletePost(id) {
                'use strict'
                
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </div>
</x-app>