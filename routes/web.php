<?php

use App\Http\Controllers\HomeController; // Import the HomeController class

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::view('/', 'welcome');
//create a route for / that will also include the properties var
Route::get('/', function () {
    $properties = \App\Models\Property::all();
    return view('welcome', ['properties' => $properties]);
});

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    use App\Http\Controllers\PropertyController;

    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);
    Route::resource('properties', PropertyController::class);



require __DIR__.'/auth.php';
