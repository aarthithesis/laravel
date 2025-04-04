<?php


use Illuminate\Support\Facades\Route;

// Route to display the form
/*Route::get('/form', [PageController::class, 'form'])->name('user');

// Route to handle form submission
Route::post('/submit', [PageController::class, 'submit'])->name('submit');

Route::get('/{name}', function($name) {
    return "<h5>Welcome </h5><h4>$name</h4> <a href='" . route('user') . "'>register here</a>";
}); */


use App\Http\Controllers\ProductInsertController;

Route::get('/insert_login', [ProductInsertController::class, 'insert_login']);
Route::post('/insert_login', [ProductInsertController::class, 'insert']);

use App\Http\Controllers\ProductDetailsController;

Route::get('/insert_product', [ProductDetailsController::class, 'insert_product']);
Route::post('/insert_product', [ProductDetailsController::class, 'insert']);
?>
