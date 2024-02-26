<?php

namespace App\Http\Controllers\Admin;

use App\Models\meals;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MealManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string',
        // Add validation rules for other fields
    ]);

    // Handle file upload
    if ($request->hasFile('cover_image')) {
        $filePath = $request->file('cover_image')->store('public/images');
        $validatedData['cover_image'] = $filePath;
    }

    meals::create($validatedData);

    return redirect()->back()->with('success', 'Item added successfully.');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
