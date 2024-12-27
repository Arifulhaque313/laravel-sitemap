<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index(){
        $posts = Post::get();
        return response()->view('sitemap',[
            'posts' => $posts
        ])->header('Content-Type', 'application/xml');
        
    }
}
