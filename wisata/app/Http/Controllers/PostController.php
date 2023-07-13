<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Clockwork\Storage\Search;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = '';

        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('user')){
            $user = User::firstWhere('username', request('user'));
            $title = ' by ' . $user->name;
        }

        return view('posts', [
            "title" => "Wisata Depok" . $title,
            "active" => 'blog',
            "posts" => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'blog',
            "post" => $post
        ]);
    }
}
