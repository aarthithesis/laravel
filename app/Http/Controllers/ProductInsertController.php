<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductInsertController extends Controller
{
    public function insert_login(){
        return view('insert_login');
    }

    public function insert(Request $request) {
        $email = $request->input('mail');
        $password = $request->input('pw');
    
        DB::insert("INSERT INTO product (email, password) VALUES (?, ?)", [$email, $password]);
    
        return "login successfully.... <a href='/insert_product'>Click here to Insert Product Details</a>";
    }
    
}
