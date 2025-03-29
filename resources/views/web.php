<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route to display the form
Route::get('/form', [PageController::class, 'form'])->name('user');

// Route to handle form submission
Route::post('/submit', [PageController::class, 'submit']);

Route::get('/{name}', function($name) {
    return "Welcome $name <a href='" . route('user') . "'>register here</a>";
});


Route::get('/form', function() {
    return view('form');
})->name('user');
?>
