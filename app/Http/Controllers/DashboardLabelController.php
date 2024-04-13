<?php

namespace App\Http\Controllers;

use App\Models\Label;
use Illuminate\Http\Request;

class DashboardLabelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.label.index', [
            'labels' => Label::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.label.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'max:255',
            'color' => 'max:255',
        ]);
        Label::create($validatedData);

        return redirect('/dashboard/label')->with('success', 'Color Has Been Created');
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
    public function edit(Label $label)
    {
        return view('admin.label.edit', [
            'item' => $label,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Label $label)
    {
        $validatedData = $request->validate([
            'name' => 'max:255',
            'color' => 'max:255',
        ]);

        Label::where('id', $label->id)->update($validatedData);

        return redirect('/dashboard/label')->with('success', 'Category Has Been Edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
