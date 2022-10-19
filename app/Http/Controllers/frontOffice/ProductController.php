<?php

namespace App\Http\Controllers\frontOffice;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\User;
use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $similarProducts=$Category->products()->get();
        return view('frontOffice.shop-details', compact( 'product','Category','similarProducts'));

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

    }*/

    public function add_cart( Request $request ,int $id){
        if(Auth::id()){

            $user=Auth::user();
            //dump($user);
           $product=Product::find($id);
            $cart=new Cart();
           $cart->name=$user->getAuthIdentifierName();
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->product_title=$product->name;
            $cart->product_id=$product->id;
            $cart->user_id=$user->id;
            $cart->price=$product->price * $request->quantity;
            $cart->image=$product->picture;
            $cart->quantity=$request->quantity;
            $cart->save();
            return redirect()->back();
        }
else{

return redirect('login');
}

}

public function show_cart(){

        if(Auth::id()){
            $id=Auth::user()->id;
            $carts=Cart::where('user_id','=',$id)->get();
            return view('frontOffice.shopping-cart',compact('carts'));
        }
        else{
            return show('login');
        }

}

public function remove_cart($id){
        $cart=Cart::find($id);
    $cart->delete();
    return redirect()->back();
}
}
