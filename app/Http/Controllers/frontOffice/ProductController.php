<?php

namespace App\Http\Controllers\frontOffice;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $productCount=$products->count();
        $categories = CategoryProduct::all();
        return view('frontOffice.shop', compact('categories', 'products','productCount'));
    }

    public function showProductDetails(int $id){
        $product = Product::findOrFail($id);
        $idCat=$product->category;
        $Category=CategoryProduct::findOrFail($idCat);
        return view('frontOffice.shop-details', compact( 'product','Category'));

    }
    public function productsByCategory($idCategory){
        $categories = CategoryProduct::all();
        $category=CategoryProduct::findOrFail($idCategory);
        if($category){
            $products=$category->products()->get();
            return view('frontOffice.productByCategory', compact('category', 'products','categories'));

        }
        else{
            return redirect()->back();
        }

    }

 /*   public function sort_by(Request $request){
        $all_products='';
        if($request->sort_by=='lowest_price'){
      $all_products=Product::orderBy('price','asc')->get();
        }
        if($request->sort_by=='highest_price'){
            $all_products=Product::orderBy('price','dsc')->get();
        }
        $productCount=Product::all()->count();
        $categories = CategoryProduct::all();
        return view('frontOffice.search', compact('categories', 'all_products','productCount'))->render();
    }*/
}
