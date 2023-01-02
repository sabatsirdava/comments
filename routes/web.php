<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::domain("admin.localhost")->group(function(){
    Route::get("/", [PostController::class, "getPost"])->name("admin");
    Route::post("/", [PostController::class, "addPost"])->name("admin");
    Route::get("/{title}/{id}", [PostController::class, "showComments"])->name("comment");
    Route::post("/{title}/{id}", [PostController::class, "deleteComment"])->name("comment");
});

Route::get("/", [PostController::class, "showPost"])->name("list");
Route::get("/{title}/{id}", [PostController::class, "postInfo"])->name("post");

