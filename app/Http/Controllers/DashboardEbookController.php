<?php

namespace App\Http\Controllers;

use App\Models\Ebook;
use Illuminate\Http\Request;

class DashboardEbookController extends Controller
{
    public function index()
    {
        return view('admin.ebook.index', [
            'ebooks' => Ebook::all(),
        ]);
    }

    public function create()
    {
        return view('admin.ebook.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'image|file',
            'pdf' => 'file',
            'body' => 'required',
        ]);
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('ebook-images');
            $validatedData['pdf'] = $request->file('pdf')->store('ebook-pdf');
        }

        Ebook::create($validatedData);

        return redirect('/dashboard/ebook')->with('success', 'EBook has been added');
    }

    public function edit(Ebook $ebook)
    {
        return view('admin.ebook.edit', [
            'ebook' => $ebook,
        ]);
    }

    public function update(Request $request, Ebook $ebook)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'image|file',
            'pdf' => 'file',
            'body' => '',
        ]);
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('ebook-images');
            $validatedData['pdf'] = $request->file('pdf')->store('ebook-pdf');
        }

        Ebook::where('id', $ebook->id)->update($validatedData);

        return redirect('/dashboard/ebook')->with('success', 'Ebook Hast Been Edited');
    }
}
