<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'posts' => Post::latest()->filter(request(['search']))->get(),
            'categories' => Category::all()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            'post' => $post
        ]);
    }


    public function showCategoryPost(Category $category)
    {
        return view('posts', [
            'posts' => $category->posts
        ]);
    }

    public function showAuthorsPost(User $author)
    {
        return view('posts', [
            'posts' => $author->posts
        ]);
    }
}
