<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Label;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    public function index()
    {
        return view('admin.post.index', [
            'posts' => Post::latest()->paginate(10),
        ]);
    }

    public function create()
    {
        return view('admin.post.create', [
            'categories' => Category::all(),
            'labels' => Label::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'category_id' => '',
            'label_id1' => '',
            'label_id2' => '',
            'label_id3' => '',
            'slug' => 'required|unique:posts',
            'image' => 'image|file',
            'body' => 'required',
        ]);
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body, 20));
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        Post::create($validatedData);

        return redirect('/dashboard/post')->with('success', 'Berita Baru Telah Ditambahkan');
    }

    public function show(Post $post)
    {
        return view('admin.post.show', [
            'post' => $post,
        ]);
    }

    public function edit(Post $post)
    {
        return view('admin.post.edit', [
            'post' => $post,
            'categories' => Category::all(),
        ]);
    }

    public function update(Request $request, Post $post)
    {
        if ($request->slug != $post->slug) {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'category_id' => '',
                'label_id1' => '',
                'label_id2' => '',
                'label_id3' => '',
                'slug' => 'required|unique:post',
                'image' => 'image|file',
                'body' => '',
            ]);
        } else {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'category_id' => '',
                'image' => 'image|file',
                'body' => '',
            ]);
        }
        if ($request->file('image')) {
            if ($post->oldImage) {
                Storage::delete($post->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('isimateri-images');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body, 20));

        Post::where('id', $post->id)->update($validatedData);

        return redirect('/dashboard/post')->with('success', 'Post Hast Been Edited');
    }

    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::delete($post->image);
        }
        $post->delete();

        return redirect('/dashboard/post')->with('delete', 'Post Has Been Deleted');
    }
}
