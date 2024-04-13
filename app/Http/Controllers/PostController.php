<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        return view('general.post', [
            'posts' => Post::latest()->paginate(7),
        ]);
    }
}
