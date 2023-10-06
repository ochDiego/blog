<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {
        return view('admin.categories.index');
    }


    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:45',
            'slug' => 'required|unique:categories',
        ]);

        $category = Category::create($request->all());

        return redirect()->route('admin.categories.edit',$category)->with('info','Categoría creada satisfactoriamente');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit',compact('category'));
    }


    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:45',
            'slug' => "required|unique:categories,slug,$category->id",
        ]);

        $category->update($request->all());

        return redirect()->route('admin.categories.edit',$category)->with('info','Categoría actualizada satisfactoriamente');
    }


    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index')->with('info','Categoría eliminada satisfactoriamente');
    }
}
