<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $profiles = Profile::all();
    $posts = Post::with([
        'profile',
        'comments.profile',
    ])->get();

    // return $posts;

    return view('home', [
        'profiles' => $profiles,
        'posts' => $posts,
    ]);
});


// Profile
Route::resource('profile', ProfileController::class);
Route::resource('post', PostController::class);
Route::resource('comment', CommentController::class);