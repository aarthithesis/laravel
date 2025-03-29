<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends controller
{
public function form()
{
    $location = '';
    $mail = '';
    $key = '';
    $num = '';
    $date = '';
    $amount = '';
    return view('form', compact('location', 'mail', 'key', 'num', 'date', 'amount'));
}
public function submit(Request $request)
{
    $location = $request->input('location');
    $mail = $request->input('mail');
    $key = $request->input('key');
    $num = $request->input('num');
    $date = $request->input('date');
    $amount = $request->input('amount');
    
    return view('display', compact('location', 'mail', 'key', 'num', 'date', 'amount'));
    
}
}
?>