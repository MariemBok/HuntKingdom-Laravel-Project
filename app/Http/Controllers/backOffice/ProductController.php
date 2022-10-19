<?php

namespace App\Http\Controllers\backOffice;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFormRequest;
use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('backoffice.products.show-product', ['products' => $products]);
    }


    public function create()
    {
        $categories = CategoryProduct::all();
        return view('backOffice.products.add-product', ['categories' => $categories]);
    }


    public function store(ProductFormRequest $request)
    {
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/products/', $filename);
        }
        $validatedData = $request->validated();
        $category = CategoryProduct::findOrFail($validatedData['category']);
        $category->products()->create([
            'category' => $validatedData['category'],
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'reference' => $validatedData['reference'],
            //'quantity' => $validatedData['quantity'],
            'picture' => $filename
        ]);
        return redirect('back/product')->with('success', 'product added successfully');

dump($validatedData);
dump($product);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function edit(int $id)
    {
        $categories = CategoryProduct::all();
        $product = Product::findOrFail($id);
        return view('backOffice.products.edit-product', compact('categories', 'product'));
    }


    public function update(ProductFormRequest $request, int $id)
    {
        $validatedData = $request->validated();
        $product = CategoryProduct::findOrFail($validatedData['category'])
            ->products()->where('id', $id)->first();

        if ($product) {
            $filename = "";
            if ($request->hasFile('picture')) {
                $path = 'uploads/products/' . $product->picture;
                if (File::exists($path)) {
                    File::delete($path);
                }
                $file = $request->file('picture');
                $ext = $file->getClientOriginalExtension();
                $filename = time() . '.' . $ext;
                $file->move('uploads/products/', $filename);
            }
            $product->update([
                'category' => $validatedData['category'],
                'name' => $validatedData['name'],
                'description' => $validatedData['description'],
                'price' => $validatedData['price'],
                'quantity' => $validatedData['quantity'],
                'picture' => $filename

            ]);
            return redirect('back/product')->with('success', 'product updated successfully!!');
        } else {
            return redirect('back/product')->with('message', 'No Such Product Id Found');

        }
    }


    public function destroy($id)
    {
        $product = Product::find($id);
        $path = 'uploads/products/' . $product->picture;
        if (File::exists($path)) {
            File::delete($path);
        }
        $product->delete();
        return redirect('back/product')->with('successUpdate', 'product deleted successfully!!');
    }


}
