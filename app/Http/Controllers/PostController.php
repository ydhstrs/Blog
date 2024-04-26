<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        return view('general.post', [
            'posts' => Post::latest()->paginate(7),
            'contact' => Contact::get()->first(),
        ]);
    }

    public function show(Post $post)
    {
        // ddd($post);

        return view('general.article', [
            'post' => $post,
            'contact' => Contact::get()->first(),
        ]);
    }

    public function showCategory(Category $category)
    {
        $posts = $category->posts()->paginate(9);

        return view('general.postcategory', compact('posts'));
    }
}
