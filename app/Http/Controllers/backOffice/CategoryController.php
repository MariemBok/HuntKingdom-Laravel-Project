<?php

namespace App\Http\Controllers\backOffice;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use App\Models\CategoryProduct;
use Illuminate\Http\Response;


class CategoryController extends Controller
{

    public function index()
    {
        $categories=CategoryProduct::all();
        return view('backoffice.category.show-category',['categories'=>$categories]);

    }


    public function create()
    {
                return view('backOffice.Category.add-category');

    }


    public function store(CategoryFormRequest $request)
    {
          $validateData = $request->validated();
                $category = new CategoryProduct();
                $category->name = $validateData['name'];
                $category->description = $validateData['description'];
                $category->save();
                return redirect('back/category')->with('success', 'category added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */

    public function show($id)
    {
        //show products category
    }


    public function edit( CategoryProduct $category)
    {
        return view('backOffice.category.edit-category', compact('category'));
    }

    public function update(CategoryFormRequest $request, $category)
    {
        $validateData = $request->validated();
        $category = CategoryProduct::findOrFail($category);
        $category->name = $validateData['name'];
        $category->description = $validateData['description'];
        $category->update();
        return redirect('back/category')->with('s', 'category updated successfully!!');
    }


    public function destroy($id)
    {
        $category=CategoryProduct::find($id);

        $category->delete();
        return redirect('back/category')->with('message', 'category deleted successfully!!');
    }
}
