<x-app-layout>
    <x-slot name="header">
        <h1>header</h1>
    </x-slot>
    
    <div class="top">
        <h1>新規作成</h1>
    </div>
    <form action="/posts" method="POST">
        @csrf
        <div>
            <label for="title">タイトル</label>
            <input type="text" name="post[title]" value="{{ old("post.title") }}">
            <p class="title_error" style="color:red">{{$errors->first("post.title")}}</p>
        </div>
        <div>
            <label for="ingredient">具財</label>
            <textarea type="text" name="post[ingredient]" value="{{ old("post.ingredient") }}"></textarea>
            <p class="body_error" style="color:red">{{$errors->first("post.ingredient")}}</p>
        </div>
        <div>
            <label for="body">工程</label>
            <textarea type="text" name="post[body]" value="{{ old("post.body") }}"></textarea>
            <p class="body_error" style="color:red">{{$errors->first("post.body")}}</p>
        </div>
        <div class="categories">
            <h2>Category</h2>
            <select name="post[category_id]">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <select name="post[type_category_id]">
                @foreach($type_categories as $type_category)
                    <option value="{{ $type_category->id }}">{{ $type_category->name }}</option>
                @endforeach
            </select>
            <select name="post[calorie_category_id]">
                @foreach($calorie_categories as $calorie_category)
                    <option value="{{ $calorie_category->id }}">{{ $calorie_category->name }}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="送信"/>
    </form>
    <a href="/">back</a>
</x-app-layout>