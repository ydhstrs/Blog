<?php

namespace App\Http\Controllers;

use App\Models\LandingPageContent;
use Illuminate\Http\Request;

class DashboardLandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('admin.landingpage.index', [
            'contents' => LandingPageContent::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.landingpage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
          'section_number' => 'max:255',
          'title_head' => 'max:255',
          'desc' => '',
          'subtitle1' => 'max:255',
          'subtitle2' => 'max:255',
          'subtitle3' => 'max:255',
          'desc1' => '',
          'desc2' => '',
          'desc3' => '',
        ]);
        LandingPageContent::create($validatedData);

        return redirect('/dashboard/landingpage')->with('success', 'Content Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LandingPageContent $landingpage)
    {
        return view('admin.landingpage.edit', [
            'item' => $landingpage,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LandingPageContent $landingpage)
    {
        $validatedData = $request->validate([
        'title_head' => 'max:255',
        'desc' => '',
        'subtitle1' => 'max:255',
        'subtitle2' => 'max:255',
        'subtitle3' => 'max:255',
        'desc1' => '',
        'desc2' => '',
        'desc3' => '',
        ]);

        LandingPageContent::where('id', $landingpage->id)->update($validatedData);

        return redirect('/dashboard/landingpage')->with('success', 'Section Baru Telah Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
