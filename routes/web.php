<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Muhammad Azwar Anas', 'title' => 'About']);
});

// TUGAS BUAT 2 RUTE BARU
// 1. /Blog = menampilkan 2 buah artikel judul dan isi
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

// Rute specific Blog
Route::get('/posts/{post:slug}', function (Post $post) {

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

// 2. /contact = email - social media
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

// Author id
Route::get('/authors/{user}', function (User $user) {

    return view('posts', ['title' => 'Articels By ' . $user->name, 'posts' => $user->posts]);
});

// Categories
Route::get('/categories/{category}', function (Category $category) {

    return view('posts', ['title' => 'In Category ' . $category->nama_category, 'posts' => $category->posts]);
});
