<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route to display the form
Route::get('/form', [PageController::class, 'form'])->name('user');

// Route to handle form submission
Route::post('/submit', [PageController::class, 'submit'])->name('submit');

Route::get('/{name}', function($name) {
    return "<h5>Welcome </h5><h4>$name</h4> <a href='" . route('user') . "'>register here</a>";
});



?>
