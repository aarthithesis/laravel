<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ProductDetailsController extends Controller
{
    public function insert_product(){
        return view('insert_product');
    }

    public function insert(Request $request) {
        $product_name = $request->input('name');
        $product_description = $request->input('detail');
        $product_keyword = $request->input('key');
        $product_category = $request->input('category');
        $product_brand = $request->input('brand');
        $product_image1 = $request->file('photo1');
        $product_image2 = $request->file('photo2');
        $product_image3 = $request->file('photo3'); 
        $product_price = $request->input('amount');
    
        $filename1 = $product_image1 ? $product_image1->store('products', 'public') : null;
        $filename2 = $product_image2 ? $product_image2->store('products', 'public') : null;
        $filename3 = $product_image3 ? $product_image3->store('products', 'public') : null;
    
        DB::insert("INSERT INTO productdetail 
            (name, detail, `key`, category, brand, photo1, photo2, photo3, amount)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)", [
                $product_name,
                $product_description,
                $product_keyword,
                $product_category,
                $product_brand,
                $filename1,
                $filename2,
                $filename3,
                $product_price
        ]);
    
        return "Product Inserted successfully.... <a href='/insert_product'>Insert Product Details</a>  <a href='/insert_login'>Log Out</a>";
    }
        
}
