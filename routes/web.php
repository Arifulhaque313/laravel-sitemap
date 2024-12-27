<?php

use App\Http\Controllers\SitemapController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/services', function () {
    return view('services');
});

// Additional Routes
Route::get('/about-us', function () {
    return view('about-us'); 
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions'); 
});


Route::get('/post/{slug}', function ($slug) {

    $post = Post::where('slug', $slug)->firstOrFail();

    // Return the post details view with the post data
    return view('post.details', compact('post'));
});


Route::get('/sitemap.xml',[SitemapController::class, 'index']);
