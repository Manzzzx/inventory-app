<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::with('category')->get();
        
        return view('pages.products.index', [
            'products' => $products,
        ]);
    }
}