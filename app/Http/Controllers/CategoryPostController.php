<?php

namespace App\Http\Controllers;
use App\Models\CategoryPost;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryPostReq;
use Illuminate\Http\Request;

class CategoryPostController extends Controller
{
    public function index()
    {
        return view('frontOffice.postCategories.index')->with('categories', CategoryPost::all());

    }

    public function create()
    {
        return view('frontOffice.postCategories.create');

    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|min:3|max:255|string'
            ]);

        $category = new CategoryPost();
        // $category->name = $validateData['name'];
        // $category->save();

                 CategoryPost::create($request->all());
                 return redirect()->route('categories.index')
                        ->with('success','Post created successfully.');

    }

    public function edit(CategoryPost $category)
    {
        return view('frontOffice.postCategories.edit', compact('category'));
    }

    public function update(Request $request, CategoryPost $category)
    {
        $request->validate([
            'name' => 'required|min:3|max:255|string',
        ]);

        $category->update($request->all());

        return redirect()->route('categories.index')
                        ->with('success','updated successfully');
    }

    public function destroy(CategoryPost $category)
    {
        $category->delete();
        return redirect()->route('categories.index')
                        ->with('success','deleted successfully');
    }
}

