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
            <p class="ingredient_error" style="color:red">{{$errors->first("post.ingredient")}}</p>
        </div>
        <div>
            <label for="protein">タンパク質(g)</label>
            <input type="number" name="post[protein]" value="{{ old("post.protein") }}"></input>
            <p class="protein_error" style="color:red">{{$errors->first("post.protein")}}</p>
        </div>
        <div>
            <label for="fat">脂肪(g)</label>
            <input type="number" name="post[fat]" value="{{ old("post.fat") }}"></input>
            <p class="fat_error" style="color:red">{{$errors->first("post.fat")}}</p>
        </div>
        <div>
            <label for="carbonhydrate">炭水化物(g)</label>
            <input type="number" name="post[carbonhydrate]" value="{{ old("post.carbonhydrate") }}"></input>
            <p class="carbonhydrate_error" style="color:red">{{$errors->first("post.carbonhydrate")}}</p>
        </div>
        <div>
            <label for="calorie">カロリー(kcal)</label>
            <input type="number" name="post[calorie]" value="{{ old("post.calorie") }}"></input>
            <p class="calorie_error" style="color:red">{{$errors->first("post.calorie")}}</p>
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
    <a href="/dashboard">back</a>
</x-app-layout>