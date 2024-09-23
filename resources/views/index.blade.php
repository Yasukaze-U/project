<x-app-layout>
    <x-slot name="header">
    </x-slot>
    
    <form action="search" method="GET">
        @csrf
        <dev>
            <p>
                <a>キーワード</a>
                <textarea type="text" name="keyword">{{ old("keyword") }}</textarea>
            </p>
        </dev>
        
        <dev>
            <p>
                <a>カロリー量：</a>
                <input type="number" name="calorie_min" value="{{ old("calorie_min") }}" placeholder="下限なし"></input>
                <a>(g)から</a>
                <input type="number" name="calorie_max" value="{{ old("calorie_max") }}" placeholder="上限なし"></input>
                <a>(g)</a>
            </p>
        </dev>
        
        <input type="submit" value="検索">
    </form>
    
    <div class="posts">
        @csrf
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