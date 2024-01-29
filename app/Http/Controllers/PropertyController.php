<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property; // Import the Property model


class PropertyController extends Controller
{
    //

    public function index()
{
    $properties = Property::all();
    return view('properties.index', compact('properties'));
}

public function create()
{
    return view('properties.create');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'description' => 'required',
        'address' => 'required',
        'beds' => 'required',
        'bath' => 'required',
        'zipcode' => 'required',
        // Include other fields as necessary
    ]);

    Property::create($validatedData);

    return redirect()->route('dashboard')->with('success', 'Property created successfully.
    
    Please check added property on the Dashboard.');
}

public function show(Property $property)
{
    return view('properties.show', compact('property'));
}

public function edit(Property $property)
{
    return view('properties.edit', compact('property'));
}

public function update(Request $request, Property $property)
{
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'description' => 'required',
        'address' => 'required',
        'beds' => 'required',
        'bath' => 'required',
        'zipcode' => 'required',
        // Include other fields as necessary
    ]);

    $property->update($validatedData);

    return redirect()->route('dashboard')->with('success', 'Property updated successfully.');
}

public function destroy(Property $property)
{
    $property->delete();
    return redirect()->route('dashboard')->with('success', 'Property deleted successfully.');
}



}
