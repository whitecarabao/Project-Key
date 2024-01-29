<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     $properties = Property::all(); // Fetch all properties
    //     return view('dashboard', compact('properties'));
    // }

    public function index()
{
    $properties = Property::all(); // Fetch all properties
    if (auth()->user()->isAdmin) {
        return view('dashboard.admin', compact('properties')); // Admin dashboard view
    } else {
        return view('dashboard.user', compact('properties')); // Regular user dashboard view
    }
}
}
