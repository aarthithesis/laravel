<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends controller
{
    public function about()
    {
    return "hello its working";
}
public function form(Request $request)
{
    $location = $request->input('location','');
    return view('page.form', ['location' => $location, 'request'  => $request]);
}
}
?>