<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [PostController::class, "top"])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::group(["middleware" => ["auth"]], function(){
   Route::get("/posts/create", [PostController::class, "create"])->name("create"); 
   Route::get("/posts/{post}", [PostController::class, "show"])->name("show"); 
   Route::get("mypage", [PostController::class, "mypage"])->name("mypage"); 
   Route::get("index", [PostController::class, "index"])->name("index"); 
   Route::get("search", [PostController::class, "search"])->name("search"); 
   Route::post("/posts", [PostController::class, "store"]); 
   Route::delete('/posts/{post}', [PostController::class,'delete']);
});