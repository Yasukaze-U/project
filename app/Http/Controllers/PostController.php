<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\TypeCategory;
use App\Models\CalorieCategory;
use App\Models\Like;
use App\Models\Review;

class PostController extends Controller
{
    public function top(Post $post){
        return view("posts.top")->with(["posts"=>$post->get()]);
    }
    public function create(Category $category, TypeCategory $type_category, CalorieCategory $calorie_category){
        return view("posts.create")->with(['categories' => $category->get()])->with(['type_categories' => $type_category->get()])->with(['calorie_categories' => $calorie_category->get()]);
    }
    
    
}
