<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route to display the form
Route::get('/form', [PageController::class, 'form']);

// Route to handle form submission
Route::post('/submit', [PageController::class, 'submit']);

?>