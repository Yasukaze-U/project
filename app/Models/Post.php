<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable = ["title", "body", "ingredient", "protein", "fat", "calorie", "carbonhydrate",  "category_id", "type_category_id", "calorie_category_id"];
    use HasFactory;
    
    public function getByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    
    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function type_category(){
        return $this->belongsTo(TypeCategory::class);
    }
    
    public function calorie_category(){
        return $this->belongsTo(CalorieCategory::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    function getPaginateByLimit(int $limit_count = 5){
        return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}