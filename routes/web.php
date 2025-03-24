<?php

use App\http\Controllers\PageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user',function ()
{
    return view('welcome');
})->name('user');
?>