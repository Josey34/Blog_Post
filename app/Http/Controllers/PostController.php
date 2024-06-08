<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $title = 'All Posts'; // default title

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = 'Posts in ' . $category->name; // Adjust the title if a category is set
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = 'Posts by ' . $author->name; // Adjust the title if an author is set
        }

        return view('posts', [
            "title" => $title, // Use the adjusted title
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString(),
        ]);
    }


    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
