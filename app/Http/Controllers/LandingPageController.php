<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\EmailSubmit;
use App\Models\LandingPageContent;
use App\Models\Partner;
use App\Models\Post;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(Request $request)
    {
        return view('general.welcome', [
            'section1' => LandingPageContent::where('section_number', 1)->get()->first(),
            'section2' => LandingPageContent::where('section_number', 2)->get()->first(),
            'section3' => LandingPageContent::where('section_number', 3)->get()->first(),
            'section4' => Partner::get(),
            'sectionblog' => Post::latest()->take(3)->get(),
            'sectioncategory' => Category::where('is_show', 1)->get(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
          'email' => 'max:255',
          'name' => 'max:255',
        ]);
        EmailSubmit::create($validatedData);

        return redirect('/')->with('success', '');
    }
}
