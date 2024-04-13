<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.contact.index', [
            'contacts' => Contact::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|max:255',
            'tiktok' => 'required|max:255',
            'linkedin' => 'required|max:255',
            'instagram' => 'required|max:255',
            'discord' => 'required|max:255',
            'twitter' => 'required|max:255',
            'youtube' => 'required|max:255',
        ]);

        Contact::create($validatedData);

        return redirect('/dashboard/contact')->with('success', 'Success Created Contact');
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
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $validatedData = $request->validate([
            'email' => 'required|max:255',
            'tiktok' => 'required|max:255',
            'linkedin' => 'required|max:255',
            'instagram' => 'required|max:255',
            'discord' => 'required|max:255',
            'twitter' => 'required|max:255',
            'youtube' => 'required|max:255',
        ]);

        Contact::where('id', $contact->id)->update($validatedData);

        return redirect('/dashboard/contact')->with('success', 'Success Edited Contact');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
