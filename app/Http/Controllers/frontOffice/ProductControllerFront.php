<?php

namespace App\Http\Controllers\frontOffice;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductControllerFront extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = CategoryProduct::all();
        return view('frontOffice.shop', compact('categories', 'products'));
    }
}
